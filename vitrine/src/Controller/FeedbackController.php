<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Kreait\Firebase\Database;
use Kreait\Firebase\Auth;
use Symfony\Component\HttpFoundation\Request;
use Kreait\Firebase\Exception\FirebaseException;
use Throwable;



class FeedbackController extends AbstractController
{

    private Database $database;

    public function __construct(Database $firebase, Auth $auth)
    {
        $this->database = $firebase;
        $this->auth = $auth;
    }


    /**
     * @Route("/api/feedback_submit", name="feedback_submit")
     */ 
    public function index(Request $request)
    {
        //On récupère les données venant du front
        $content = json_decode($request->getContent());

        //On assigne chaque donnée récupérée à une variable
        $uid = $content->UID;
        $nom = $content->nom;
        $photo = $content->photo;
        $idToken = $content->idToken;
        $prof = $content->prof;
        $message = $content->message;
        $note = $content->note;
        $date = $content->date; 

        //Vérification utilisateur connecté
        $verifiedIdToken = $this->auth->verifyIdToken($idToken);
        $uidCheck = $verifiedIdToken->claims()->get('sub');
        $user = $this->auth->getUser($uidCheck);

        //Instancie la classe Response
        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        if ($user) {

            //Déclare le tableau pour remplir la BDD
            $postData = [
                'id' => 'default',
                'uid' => $uid,
                'nom' => $nom,
                'photo' => $photo,
                'profession' => $prof,
                'message' => $message,
                'note' => $note,
                'date' => $date
            ];


            try {
                //Envoie à la BDD du Tableau ci-dessus
                $push = $this->database->getReference('feedbackPending')->push($postData);

                //On change l'ID par la clef
                $key = $push->getKey();
                
                $ref = '/feedbackPending//'.$key.'//id';
                $this->database->getReference($ref)->set($key);

                $response->setContent(json_encode('Votre avis a été soumis / Feedback submited successfully'));
        
                return $response;
              
            } 
            catch (FirebaseException $e) {
                $response->setContent(json_encode('Erreur : votre avis n\'a pas pu être ajouté / Your feedback couldn\'t be added : '.$e->getMessage()));
        
                return $response;
            } catch (Throwable $e) {
                $response->setContent(json_encode('Erreur : votre avis n\'a pas pu être ajouté / Your feedback couldn\'t be added : '.$e->getMessage()));
        
                return $response;
            }
        }
        else {
            
            $response->setContent(json_encode('Erreur : votre avis n\'a pas pu être ajouté / Your feedback couldn\'t be added'));
            return $response;
        }
    }


    /**
     * @Route("/api/feedback_disp", name="feedback_disp")
     */ 
    public function display() 
    {
        $reference = 'feedback';
        $snapshot = $this->database->getReference($reference)->getSnapshot();
        $key = array_keys($snapshot->getValue());
        $val = array_values($snapshot->getValue());

        //return $this->json($val);

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        

        $response->setContent(json_encode($val));
        
        return $response;
    }

    /*ADMIN*/

    /**
     * @Route("/api/feedback_disp_admin", name="feedback_disp_admin")
     */ 
    public function display_admin() 
    {
        $reference = 'feedbackPending';
        $snapshot = $this->database->getReference($reference)->getSnapshot();
        
        if ($snapshot->getValue() == null) {

            $response = new Response();

            $response->headers->set('Content-Type', 'application/json');
            $response->headers->set('Access-Control-Allow-Origin', '*');

            $response->setContent(json_encode('null'));
        
        return $response;
        }
        else {
            $val = array_values($snapshot->getValue());

            //return $this->json($val);

            $response = new Response();

            $response->headers->set('Content-Type', 'application/json');
            $response->headers->set('Access-Control-Allow-Origin', '*');

            $response->setContent(json_encode($val));
            
            return $response;
        }
    }

    /**
     * @Route("/api/feedback_validate", name="feedback_validate")
     */ 
    public function validateFeedback(Request $request)
    {
        //On récupère les données venant du front
        $content = json_decode($request->getContent());

        //On assigne chaque donnée récupérée à une variable
        $id = $content->id; 
        $idToken = $content->idToken; 
         
        //Verification des droits (admin)
        $verifiedIdToken = $this->auth->verifyIdToken($idToken);
        $uid = $verifiedIdToken->claims()->get('sub');
        $claims = $this->auth->getUser($uid)->customClaims;

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        
        
        if ($claims['admin'] === true) {

            $reference = 'feedbackPending//'.$id;
            $snapshot = $this->database->getReference($reference)->getSnapshot()->getValue();
            $postData = $snapshot;

            
            try {
                //Envoie à la BDD du commentaire validé
                $push = $this->database->getReference('feedback')->push($postData);

                //On change l'ID par la clef
                $key = $push->getKey();
                $ref = '/feedback//'.$key.'//id';
                $this->database->getReference($ref)->set($key);

                //Suppression du message ajouter dans feedbackPending
                $this->database->getReference('feedbackPending//'.$id)->remove();

                $response->setContent(json_encode('Avis Validé'));
                return $response;
            } 
            catch (FirebaseException $e) {
                $response->setContent(json_encode('Une erreur s\'est produite :'.$e->getMessage()));
                return $response;
            } 
            catch (Throwable $e) {
                $response->setContent(json_encode('Une erreur s\'est produite :'.$e->getMessage()));
                return $response;
            }
        }
        else {
            $response->setContent(json_encode('Impossible de trouver les droits d\'Administrateur nécessaire'));
            return $response;
        }
        
    }

    /**
     * @Route("/api/feedback_delete", name="feedback_delete")
     */ 
    public function deleteFeedback(Request $request)
    {
        //On récupère les données venant du front
        $content = json_decode($request->getContent());

        //On assigne chaque donnée récupérée à une variable
        $id = $content->id;
        $idToken = $content->idToken; 
         
        //Verification des droits
        $verifiedIdToken = $this->auth->verifyIdToken($idToken);
        $uid = $verifiedIdToken->claims()->get('sub');
        $claims = $this->auth->getUser($uid)->customClaims; 

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        if ($claims['admin'] === true) {

            $reference = 'feedbackPending//'.$id;
            try {
            //Suppression de l'avis
            $this->database->getReference($reference)->remove();

            $response->setContent(json_encode('Avis supprimé'));
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
        else {
            $response->setContent(json_encode('Impossible de trouver les droits d\'Administrateur nécessaire'));
            return $response;
        }
    }
}
