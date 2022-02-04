<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Kreait\Firebase\Database;
use Kreait\Firebase\Auth;
use Symfony\Component\HttpFoundation\Request;

class QuizResultController extends AbstractController
{
    private Database $database;

    public function __construct(Database $firebase, Auth $auth, AdminController $admin)
    {
        $this->database = $firebase;
        $this->auth = $auth;
        $this->admin = $admin;
    }
    //ADMIN

    /**
     * @Route("/api/display_quiz_result_name", name="display_quiz_result_name")
     */ 
    public function index()
    {
        $reference = 'resultQuiz';
        $snapshot = $this->database->getReference($reference)->getSnapshot();
        $key = array_keys($snapshot->getValue());

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $response->setContent(json_encode($key));
        
        return $response;
    }

    /**
     * @Route("/api/display_quiz_result", name="display_quiz_result")
     */ 
    public function results(Request $request)
    {
        $content = json_decode($request->getContent());
        $quizName = $content->quiz;
        $quizId = $content->id;

        $reference = 'resultQuiz//'.$quizName.'//'.$quizId;
        
        $snapshot = $this->database->getReference($reference)->getSnapshot();
        $val = $snapshot->getValue();

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $response->setContent(json_encode($val));
        
        return $response;
    }

    /**
     * @Route("/api/display_quiz_user", name="display_quiz_user")
     */ 
    public function quizUsers(Request $request)
    {
        $content = json_decode($request->getContent());
        $quizName = $content->quiz;

        $reference = 'resultQuiz//'.$quizName;
        
        $snapshot = $this->database->getReference($reference)->getSnapshot();
        $val = array_values($snapshot->getValue());
        $length = count($val);

        for ($i = 0; $i < $length; $i++) {
            $email[$i] = [
                'email' => $val[$i]['email'],
                'id' => $val[$i]['id']
            ];
        }


        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $response->setContent(json_encode($email));
        
        return $response;
    }




    //USERS

    /**
     * @Route("/api/quiz_result_name_user", name="quiz_result_name_user")
     */ 
    public function displayQuizNames(Request $request)
    {

        $content = json_decode($request->getContent());
        $email = $content->email;

        $emailChange = str_replace('.', ' ', $email);


        $reference = 'resultQuizUser//'.$emailChange;
        $snapshot = $this->database->getReference($reference)->getSnapshot();

        if ($snapshot->getvalue() == null) {
            $response = new Response();

            $response->headers->set('Content-Type', 'application/json');
            $response->headers->set('Access-Control-Allow-Origin', '*');

            $response->setContent(json_encode('null'));
            
            return $response;
        }
        else {
            $key = array_keys($snapshot->getValue());

            $response = new Response();

            $response->headers->set('Content-Type', 'application/json');
            $response->headers->set('Access-Control-Allow-Origin', '*');

            $response->setContent(json_encode($key));
            
            return $response;
        }
        
    }

    /**
     * @Route("/api/display_quiz_id", name="display_quiz_id")
     */ 
    public function displayQuizId(Request $request)
    {
        $content = json_decode($request->getContent());
        $quizName = $content->quiz;
        $email = $content->email;

        $emailChange = str_replace('.', ' ', $email);

        $reference = 'resultQuizUser//'.$emailChange.'//'.$quizName;
        
        $snapshot = $this->database->getReference($reference)->getSnapshot();
        $val = array_keys($snapshot->getValue());


        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $response->setContent(json_encode($val));
        
        return $response;
    }

    /**
     * @Route("/api/display_quiz_result_user", name="display_quiz_result_user")
     */ 
    public function resultsUser(Request $request)
    {
        $content = json_decode($request->getContent());
        $quizName = $content->quiz;
        $quizId = $content->id;
        $email = $content->email;

        $emailChange = str_replace('.', ' ', $email);

        $reference = 'resultQuizUser//'.$emailChange.'//'.$quizName.'//'.$quizId;
        
        $snapshot = $this->database->getReference($reference)->getSnapshot();
        $val = $snapshot->getValue();

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $response->setContent(json_encode($val));
        
        return $response;
    }
}
