<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Kreait\Firebase\Database;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Throwable;
use Symfony\Component\HttpFoundation\Request;

//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
//header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

class QuizController extends AbstractController
{

    private Database $database;

    public function __construct(Database $firebase, Auth $auth)
    {
        $this->database = $firebase;
        $this->auth = $auth;
    }


    /**
     * @Route("/api/create_quiz", name="create_quiz")
     */ 
    public function index(Request $request)
    {
        //On récupère les données venant du front
        $content = json_decode($request->getContent());

        //On assigne chaque donnée récupérée à une variable
        $nom = $content->nom;
        $question = $content->question;
        $choix1 = $content->choix1;
        $choix2 = $content->choix2;
        $choix3 = $content->choix3;
        $choix4 = $content->choix4;
        $reponse = $content->reponse;  
        $repCorrect = ${'choix'.$reponse};
        $idToken = $content->idToken;
        
        
        $verifiedIdToken = $this->auth->verifyIdToken($idToken);
        $uid = $verifiedIdToken->claims()->get('sub');
        $claims = $this->auth->getUser($uid)->customClaims;

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        

        if ($claims['admin'] === true) {

            //Déclare le tableau pour remplir la BDD
            $postData = [
                'id' => 'default',
                'nom' => $nom,
                'question' => $question,
                'choix1' => $choix1,
                'choix2' => $choix2,
                'choix3' => $choix3,
                'choix4' => $choix4,
                'reponse' => $reponse,
                'repCorrect' => $repCorrect
            ];

            //Envoie à la BDD du Tableau ci-dessus
            
            
            try {
                $push1 = $this->database->getReference('quiz//'.$nom)->push($postData);
            } 
            catch (FirebaseException $e) {
                $response->setContent(json_encode('Une erreur s\'est produite :'.$e->getMessage));
                return $response;
            } 
            catch (Throwable $e) {
                $response->setContent(json_encode('Une erreur s\'est produite :'.$e->getMessage));
                return $response;
            }

            //On change l'ID par la clef
            $key1 = $push1->getKey();
            $ref1 = 'quiz//'.$nom. '//' .$key1.'//id';

            try {
                $this->database->getReference($ref1)->set($key1);
                $response->setContent(json_encode('Question ajoutée, vous pouvez en ajouter une autre pour ce questionnaire'));
                return $response;
            } 
            catch (FirebaseException $e) {
                $response->setContent(json_encode('Une erreur s\'est produite :'.$e->getMessage));
                return $response;
            } catch (Throwable $e) {
                $response->setContent(json_encode('Une erreur s\'est produite :'.$e->getMessage));
                return $response;
            }
        }
        else {
            $response->setContent(json_encode( 'Aucun rôle administrateur trouvé'));
            return $response;
        }
        
    }


    /**
     * @Route("/api/update_quiz", name="update_quiz")
     */ 
    public function update(Request $request)
    {
        //On récupère les données venant du front
        $content = json_decode($request->getContent());

        //On assigne chaque donnée récupérée à une variable
        $nom = $content->nom;
        $question = $content->question;
        $choix1 = $content->choix1;
        $choix2 = $content->choix2;
        $choix3 = $content->choix3;
        $choix4 = $content->choix4;
        $reponse = $content->reponse;  
        $id = $content->id;

        //$user = $this->auth->getUser($uid);

        //Déclare le tableau pour remplir la BDD
        $postData = [
            'nom' => $nom,
            'question' => $question,
            'choix1' => $choix1,
            'choix2' => $choix2,
            'choix3' => $choix3,
            'choix4' => $choix4,
            'reponse' => $reponse
        ]; 

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        
        //Envoie à la BDD du Tableau ci-dessus

            try {
                $this->database->getReference('quiz//'.$nom.'//'.$id)->update($postData);
    
                $response->setContent(json_encode('Modification(s) enregistrée(s)'));
                return $response;
               
            } 
            catch (FirebaseException $e) {
                $response->setContent(json_encode('Une erreur s\'est produite :'.$e->getMessage));
                return $response;
            } 
            catch (Throwable $e) {
                $response->setContent(json_encode('Une erreur s\'est produite :'.$e->getMessage));
                return $response;
            } 
    }

    /**
     * @Route("/api/delete_question", name="delete_question")
     */ 
    public function deleteQuestion(Request $request)
    {
        //On récupère les données venant du front
        $content = json_decode($request->getContent());

        //On assigne chaque donnée récupérée à une variable
        $nom = $content->nom;  
        $id = $content->id;
         

        //Suppression Question

            try {
                $this->database->getReference('quiz//'.$nom.'//'.$id)->remove();
    
                return $this->json([
                    'Question supprimée avec succès !'  
                ]);
               
            } 
            catch (FirebaseException $e) {
                return $this->json([
                    'Une erreur s\'est produite :'.$e->getMessage
                ]);
            } catch (Throwable $e) {
                return $this->json([
                    'Une erreur s\'est produite :'.$e->getMessage 
                ]);
            } 
    }

    /**
     * @Route("/api/delete_quiz", name="delete_quiz")
     */ 
    public function deleteQuiz(Request $request)
    {
        //On récupère les données venant du front
        $content = json_decode($request->getContent());

        //On assigne chaque donnée récupérée à une variable
        $nom = $content->nom;


        //Suppression Quiz + Résultats

            try {
                $this->database->getReference('quiz//'.$nom)->remove();

                $num = $this->database->getReference('resultQuiz//'.$nom)->getSnapshot()->numChildren();

                if ($num !== null) {
                $this->database->getReference('resultQuiz//'.$nom)->remove();
                }

                $snapshot = $this->database->getReference('resultQuizUser')->getSnapshot();
                $keys = array_keys($snapshot->getValue());
                $length = count($keys);

                for ($i=0; $i < $length; $i++ ) {
                    $key = $keys[$i];
                    $snapshot = $this->database->getReference('resultQuizUser//'.$key.'//'.$nom)->getSnapshot()->getValue();
                    if ($snapshot !== null) {
                        $this->database->getReference('resultQuizUser//'.$key.'//'.$nom)->remove();
                    }
                }
    
                return $this->json([
                    'Quiz supprimé avec succès !'  
                ]);
               
            } 
            catch (FirebaseException $e) {
                return $this->json([
                    'Une erreur s\'est produite :'.$e->getMessage
                ]);
            } 
            catch (Throwable $e) {
                return $this->json([
                    'Une erreur s\'est produite :'.$e->getMessage 
                ]);
            } 
    }




/**
     * @Route("/api/display_quiz", name="display_quiz")
     */ 
    public function displayQuiz() 
    {

        $reference = 'quiz';
        $snapshot = $this->database->getReference($reference)->getSnapshot();
        $key = array_keys($snapshot->getValue());

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $response->setContent(json_encode($key));
        
        return $response;
    }

    /**
     * @Route("/api/display_questions", name="display_questions")
     */ 
    public function displayQuestions(Request $request) 
    {
        $content = json_decode($request->getContent());
        $quizName = $content->quiz;
        
        $reference = 'quiz//'.$quizName;
        
        $snapshot = $this->database->getReference($reference)->getSnapshot();
        $val = array_values($snapshot->getValue());
        $numberQuestion = $snapshot->numChildren();

        $result = [$numberQuestion, $val];

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');


        $response->setContent(json_encode($result));
        
        return $response;
        
    }





    /**
     * @Route("/api/answer_quiz", name="answer_quiz")
     */ 
    public function answerQuiz(Request $request)
    {
        //On récupère les données venant du front
        $content = json_decode($request->getContent());

        //On assigne chaque donnée récupérée à une variable
        $questionnaire = $content->questionnaire;
        $email = $content->email;
        $answer = $content->answer;
        $time = $content->time;

        //J'enlève le point dans l'email (non accépté par firebase)
        $emailChange = str_replace('.', ' ', $email);
        

        //Récupère les questions du quiz et on calcule le nombre de questions
        $reference = 'quiz//'.$questionnaire;
        $snapshot = $this->database->getReference($reference)->getSnapshot();
        $val = array_values($snapshot->getValue());
        $length = count($val);
        
       //Initialise les variables 
       $score = 0;
       $total = 0;

       //Prépare email et id par défaut pour BDD
       $postData = [
        'id' => 'default',
        'email' => $email,
        ];
        
        try {
            //Envoi email et id par défaut à BDD des résultats pour User et admin
            $push1 = $this->database->getReference('resultQuiz//'.$questionnaire)->push($postData);
            $push2 = $this->database->getReference('resultQuizUser//'.$emailChange.'//'.$questionnaire)->push($postData);
        } 
        catch (FirebaseException $e) {
            return $this->json([
                'Une erreur s\'est produite :'.$e->getMessage
            ]);
        } 
        catch (Throwable $e) {
            return $this->json([
                'Une erreur s\'est produite :'.$e->getMessage 
            ]);
        }
        
        //Change id dans BDD
        try {
            $key1 = $push1->getKey();
            $ref1 = 'resultQuiz//'.$questionnaire.'//'.$key1.'//id';
            $this->database->getReference($ref1)->set($key1);

            $key2 = $push2->getKey();
            $ref2 = 'resultQuizUser//'.$emailChange.'//'.$questionnaire.'//'.$key2.'//id';
            $this->database->getReference($ref2)->set($key2);
        } 
        catch (FirebaseException $e) {
            return $this->json([
                'Une erreur s\'est produite :'.$e->getMessage
            ]);
        } catch (Throwable $e) {
            return $this->json([
                'Une erreur s\'est produite :'.$e->getMessage 
            ]);
        }
        
        
        //On récupère dans un tableau les numéros des bonnes réponses pour chaque question
        for ($i = 0; $i < $length; $i++) {
            $tab1 = $val[$i];
            $tab2 = $tab1['reponse'];
            $result[$i] = $tab2;
        }
        
        //On utilise le tableau précédent pour comparé aux réponses données et on envoi les résultats à la BDD
        for ($j = 0; $j < $length; $j++) {
            if ($answer[$j] !== null) {
                $question = $answer[$j]->id;
                $total = $length;
                
                if ($question === $result[$j]) {
                    $score ++;
                    $postData = [
                        'question'.($j+1) => 'Correct',
                        'repQuestion'.($j+1) => $answer[$j]->value,
                    ];
                }
                else {
                    $postData = [
                        'question'.($j+1) => 'Incorrect',
                        'repQuestion'.($j+1) => $answer[$j]->value,
                    ];
                }
            } 
            else {
                $postData = [
                    'question'.($j+1) => 'Aucune réponse',
                    'repQuestion'.($j+1) => 'Aucune réponse',
                ];
            }

            try {
                $this->database->getReference('resultQuiz//'.$questionnaire.'//'.$key1)->update($postData);
                $this->database->getReference('resultQuizUser//'.$emailChange.'//'.$questionnaire.'//'.$key2)->update($postData);
            } 
            catch (FirebaseException $e) {
                return $this->json([
                    'Une erreur s\'est produite :'.$e->getMessage
                ]);
            } catch (Throwable $e) {
                return $this->json([
                    'Une erreur s\'est produite :'.$e->getMessage 
                ]);
            }
            
        }
        

        //Déclare le tableau pour remplir la BDD
        $postData = [
            'temps' => $time->h.'h '.$time->m.'min '.$time->s.'sec',
            'score' => $score,
            'total' => $total
        ];

        //Envoie à la BDD du Tableau ci-dessus
        try {
            $this->database->getReference('resultQuiz//'.$questionnaire.'//'.$key1)->update($postData);
            $this->database->getReference('resultQuizUser//'.$emailChange.'//'.$questionnaire.'//'.$key2)->update($postData);

            return $this->json([
                'Résultats enregistrés'
            ]);
        } 
        catch (FirebaseException $e) {
            return $this->json([
                'Une erreur s\'est produite :'.$e->getMessage
            ]);
        } catch (Throwable $e) {
            return $this->json([
                'Une erreur s\'est produite :'.$e->getMessage 
            ]);
        }
        
    }
}