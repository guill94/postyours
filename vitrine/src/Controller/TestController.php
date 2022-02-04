<?php
    
namespace App\Controller;
    
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Kreait\Firebase\Database;
use Kreait\Firebase\Auth;
use Symfony\Component\HttpFoundation\Request;


class TestController extends AbstractController
{


    private Database $database;

    public function __construct(Database $firebase, Auth $auth)
    {
        $this->database = $firebase;
        $this->auth = $auth;
    }


    /**
     * @Route("/api/database", name="database")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */ 

    /*public function index(): JsonResponse
    {
        $reference = 'info/';
        $snapshot = $this->database->getReference($reference)->getSnapshot();

        return $this->json([
            $snapshot->getValue()
            
        ]);
    }*/
     
   public function index()
    {
        $reference = 'info';
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


	/**
     * @Route("/api/tests", name="test")
     * @param Request $request
     * @return Kreait\Firebase\Database\Reference
     */
    
    public function getTests(Request $request)
    {
        
        //On récupère les données venant du front
        $content = json_decode($request->getContent());
        
        //On assigne chaque donnée récupérée à une variable
        $nom = $content->nom;
        $prenom = $content->prenom;
       
        

        //Déclare le tableau pour remplir la BDD
        $postData = [
            'id' => 'default',
            'nom' => $nom,
            'prenom' => $prenom
            
        ];
        

        $anteNum = $this->database->getReference('info')->getSnapshot()->numChildren();

        //Envoie à la BDD du Tableau ci-dessus
        $this->database->getReference('info')->push($postData);
        
        $postNum = $this->database->getReference('info')->getSnapshot()->numChildren();

        //On change l'ID par la clef
        $reference = 'info';
        $snapshot = $this->database->getReference($reference)->getSnapshot();

        $id = $snapshot->numChildren();
        $val = array_keys($snapshot->getValue());
        
        $ref = '/info//'.$val[$id-1].'//id';
        $this->database->getReference($ref)->set($val[$id-1]);
       

        if ($postNum === ($anteNum + 1)) {
            return $this->json([
                'Votre message a bien été envoyé'
                
            ]);
        }
        else {
            return $this->json([
                'Votre message n\'a pas bien été envoyé'
                
            ]);
        }
        
    }
}