<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use App\Form\ResetPasswordType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class AccountPasswordController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/compte/modifier_motdepasse", name="account_password")
     */
    public function index(Request $request, UserPasswordHasherInterface $hasher)
    {
        
        $user = $this->getUser();
        $form = $this->createForm(ChangePasswordType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $old_password = $form->get('old_password')->getData();

                if ($hasher->isPasswordValid($user, $old_password)) {
                    $new_password = $form->get('new_password')->getData();
                    $password = $hasher->hashPassword($user, $new_password);

                    $user->setPassword($password);
                    $this->entityManager->flush();
                    $this->addFlash('success', "Votre mot de passe a bien été mis à jour");

                }
                else {
                    $this->addFlash('danger', "Le mot de passe actuel est incorrect");
                }
                
        }

        return $this->render('account/changepassword.html.twig', [
            'formulaire' => $form->createView()
    ]);
    }

    /**
     * @Route("/connexion/mot-de-passe/reinitialiser", name="pw_forgot")
     */
    public function forgotPasswordEmail(Request $request, UserRepository $userRepo, MailerInterface $mailer)
    {
        $content = $request->request->all();
        $pw_token = 'default';

        if ($content) {
        
            $user = $userRepo->findOneBy(['email' => $content['email']]);
            
            if ($user && $this->isCsrfTokenValid('forgot_password', $content['_csrf_token'])) {
                $user->setPwToken($this->generateToken());
                $this->entityManager->flush();

                //$this->sendEmail(/*$user->getEmail()*/'bburgniess@gmail.com', $user->getPwToken(), $mailer);

                $this->addFlash("success", "Email de réinitialisation envoyé à votre adresse");
                $pw_token = $user->getPwToken();
                
            }
            else {
                $this->addFlash("error", "Email non valide");
            }
        }
       
        

        return $this->render('account/forgotpassword.html.twig', [
            'token' => $pw_token,
        ]);
        
    }

    /**
     * @Route("/mot-de-passe/reinitialiser/{token}", name="reset_password")
     * @param string $token
     */
    public function passwordReset(string $token, Request $request, UserRepository $userRepo, UserPasswordHasherInterface $hasher)
    {
        $user = $userRepo->findOneBy(["pw_token" => $token]);

        $form = $this->createForm(ResetPasswordType::class, $user);

        $form->handleRequest($request);


        if ($user) {
            if ($form->isSubmitted() && $form->isValid()) {

                $user = $form->getData();
                $password = $hasher->hashPassword($user, $user->getPassword());
                $user->setPassword($password);
                $user->setPwToken(null);
                $this->entityManager->flush();

                $this->addFlash("error", "Mot de passe réinitialisé avec succès");
                $this->redirectToRoute('home');
            }
        }
        else {
            $this->addFlash("error", "Erreur");
            return $this->redirectToRoute('home');
        }
        
        return $this->render('account/resetpassword.html.twig', [
            'formulaire' =>$form->createView(),
        ]);
        
    }



    /**
     * @return string
     * @throws \Exception
     */
    private function generateToken()
    {
        return rtrim(strtr(base64_encode(random_bytes(108)), '+/', '-_'), '=');
    }


    /**
  * Undocumented function
  *
  * @param MailerInterface $mailer
  * @return Response
  */
  public function sendEmail($userEmail, $token, $mailer)
  {
      $email = (new TemplatedEmail())
          ->from('bburgniess@gmail.com')
          ->to($userEmail)
          //->cc('cc@example.com')
          //->bcc('bcc@example.com')
          //->replyTo('fabien@example.com')
          //->priority(Email::PRIORITY_HIGH)
          ->subject('PostYours : Réinitialisation de votre mot de passe')
          ->htmlTemplate('emails/passwordreset.html.twig')
          ->context([
              'token' => $token,
          ])
          ;

      $mailer->send($email);

  }
}
