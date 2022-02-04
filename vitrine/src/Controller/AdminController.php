<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Kreait\Firebase\Database;
use Kreait\Firebase\Auth;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends AbstractController
{
    private Database $database;
    

    public function __construct(Database $firebase, Auth $auth)
    {
        $this->database = $firebase;
        $this->auth = $auth;
    }



    /**
     * @Route("/api/admin", name="api_admin")
     */
    public function index(Request $request)
    {
        //On récupère les données venant du front
        $content = json_decode($request->getContent());

        $email = $content->email;
        $idToken = $content->idToken;
       
        
        $verifiedIdToken = $this->auth->verifyIdToken($idToken);
        
        $uid = $verifiedIdToken->claims()->get('sub');

        //$uid = $this->auth->getUserByEmail($email)->uid;
        $claims = $this->auth->getUser($uid)->customClaims;

        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        if ($claims == ['admin' => 'true']) {
        $result = $claims;
        }
        else {
            $result = ['admin' => 'false'];
        }

        //$this->auth->setCustomUserClaims($user, ['admin' => true]);



        $response->setContent(json_encode($result));
        return $response;
        
        
    }
}
