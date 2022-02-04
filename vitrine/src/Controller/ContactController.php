<?php
    
namespace App\Controller;
    
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Kreait\Firebase\Database;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController
{


    private Database $database;

    public function __construct(Database $firebase)
    {
        $this->database = $firebase;
    }


    /**
     * @Route("/api/dataa", name="dataa")
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
     * @Route("/api/contacts", name="contacts")
     * @param Request $request
     * @return Kreait\Firebase\Database\Reference
     */
    
    public function addContact(Request $request)
    {
        
        //On récupère les données venant du front
        $content = json_decode($request->getContent());
        //dd($content);
        //On assigne chaque donnée récupérée à une variable
        $name = $content->name;
        $firstname = $content->firstname;
        $email = $content->email;
        $phone = $content->phone;
        $companyName = $content->companyName;
        $companyAddress = $content->companyAddress;
        $job = $content->job;
        $message = $content->message;
        $uid = 0;

        //Déclare le tableau pour remplir la BDD
        $postData = [
            'id' => 'default',
            'uid' => $uid++,
            'nom' => $name,
            'prenom' => $firstname,
            'email' => $email,
            'téléphone' => $phone,
            'Nom de l\'entreprise' => $companyName,
            'Adresse de l\'entreprise' => $companyAddress,
            'Poste' => $job,
            'Message' => $message
        ];
        
        

        $anteNum = $this->database->getReference('contactForm')->getSnapshot()->numChildren();

        //Envoie à la BDD du Tableau ci-dessus
        $this->database->getReference('contactForm')->push($postData);
        
        $postNum = $this->database->getReference('contactForm')->getSnapshot()->numChildren();

        //On change l'ID par la clef
        $reference = 'contactForm';
        $snapshot = $this->database->getReference($reference)->getSnapshot();

        $id = $snapshot->numChildren();
        $val = array_keys($snapshot->getValue());
        
        $ref = '/contactForm//'.$val[$id-1].'//id';
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
