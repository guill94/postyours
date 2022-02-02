<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;


class RegisterController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }


    #[Route('/inscription', name: 'register')]

    public function index(Request $request, UserPasswordHasherInterface $encoder, MailerInterface $mailer): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('home');
        }
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        $token = 'default';

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            $password = $encoder->hashPassword($user, $user->getPassword());
            $user->setPassword($password);
            $user->setToken($this->generateToken());
            $user->setVerified(false);
            
            
            $this->entityManager->persist($user);
            $this->entityManager->flush();

            //$this->sendEmail($user->getEmail(), $user->getToken(), $mailer);

            $this->addFlash("success", "Email de confirmation envoyé à votre adresse");
            //$this->redirectToRoute('home');
            $token = $user->getToken();

        }

        return $this->render('register/index.html.twig', [
            'formulaire' => $form->createView(),
            'token' => $token,
        ]);
    }

    /**
     * @Route("/confirmer/{token}", name="confirm_account")
     * @param string $token
     */
    public function confirmAccount(string $token, UserRepository $userRepo)
    {
        $user = $userRepo->findOneBy(["token" => $token]);
        if($user) {
            $user->setToken(null);
            $user->setVerified(true);
            $user->setRoles(['ROLE_USERACTIVE']);
            $this->entityManager->persist($user);
            $this->entityManager->flush();
            $this->addFlash("success", "Compte activé !");
            return $this->redirectToRoute("home");
        } else {
            $this->addFlash("danger", "Ce compte n'exsite pas !");
            return $this->redirectToRoute('home');
        }
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
            ->from('PostYours@example.com')
            ->to($userEmail)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('PostYours : Confirmation de votre inscription')
            ->htmlTemplate('emails/signup.html.twig')
            ->context([
                'token' => $token,
            ])
            ;

        $mailer->send($email);

    }
}
