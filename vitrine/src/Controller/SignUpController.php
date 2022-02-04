<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Kreait\Firebase\Database;
use Kreait\Firebase\Auth;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SignUpController extends AbstractController
{

    private Database $database;

    public function __construct(Database $firebase, Auth $auth)
    {
        $this->database = $firebase;
        $this->auth = $auth;
    }



    /**
     * @Route("/api/signup", name="api_signup")
     * @param Request $request
     * @return Kreait\Firebase\Database\Reference
     */
    public function index(Request $request)
    {
        //On récupère les données venant du front
        $content = json_decode($request->getContent());
        //dd($content);
        //On assigne chaque donnée récupérée à une variable
        $fullname = $content->fullname;
        $email = $content->email;
        $password = $content->password;
        //$checkPassword = $content->checkPassword;
        

        //Déclare le tableau pour remplir la BDD User
        $userData = [
            
            'email' => $email,
            'emailVerified' => false,
            'phoneNumber' => '+15555550100',
            'password' => $password,
            'displayName' => $fullname,
            
        ];
        
        //Créer l'utilisateur en BDD
        $this->tf = true;
        $this->auth->createUser($userData);
        
        
        
    }

}
