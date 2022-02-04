<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Kreait\Firebase\Database;
use Kreait\Firebase\Auth;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SignInController extends AbstractController
{

    private Database $database;
    

    public function __construct(Database $firebase, Auth $auth)
    {
        $this->database = $firebase;
        $this->auth = $auth;
    }



    /**
     * @Route("/api/signin", name="api_signin")
     */
    public function index(Request $request)
    {
        //On récupère les données venant du front
        $content = json_decode($request->getContent());

        //On assigne chaque donnée récupérée à une variable
        $name = $content->name;
        $email = $content->email;
        $password = $content->password;

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $user = $this->auth->getUserByEmail($email);

        if ($user) {
            $response->setContent(json_encode("Un compte existe déjà / An account already exists"));
        
            return $response;
        }
        else {
            $userProperties = [
                'email' => $email,
                'emailVerified' => false,
                'password' => $password,
                'displayName' => $name,
                'disabled' => false,
            ];
            
            $this->auth->createUser($userProperties);
            $this->auth->sendEmailVerificationLink($email);

            $response->setContent(json_encode("Email envoyé / Eamil sent"));
        
            return $response;
        }

        //$this->auth->setCustomUserClaims($user, ['admin' => true]);
        //$signInResult = $this->auth->signInWithEmailAndPassword($email, $password);

        
        
        
        
    }

}
