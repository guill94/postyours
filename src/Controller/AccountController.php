<?php

namespace App\Controller;

use App\Classes\search;
use App\Entity\Comment;
use App\Entity\Images;
use App\Form\SearchAccountType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Repository\ImagesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AccountController extends AbstractController
{
    #[Route('/compte', name: 'account')]
    #[Security("is_granted('ROLE_USER')")]
    public function index(ImagesRepository $imagesRepo, Request $request): Response
    {
        
        $user = $this->getUser();
        $userId = $user->getId();
        
        $images = $imagesRepo->findby(['user' => $userId],['createdAt' => 'DESC']);

        $search = new search();
        $form = $this->createForm(SearchAccountType::class, $search);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            if ($search->categories !== []) {
                $search = $form->getData();
                $images = $imagesRepo->findWithCatAccount($search, $userId);
            }
            else {
                $images = $imagesRepo->findby(['user' => $userId],['createdAt' => 'DESC']);
            }
            
        }


        
        return $this->render('account/index.html.twig', [
            'images' => $images,
            'formulaire' => $form->createView()
        ]);

    
    }

    #[Route('/comment/{id<[0-9]+>}/delete', name: 'delete_comment')]
    #[Security("is_granted('ROLE_USERACTIVE') and comment.getUser() == user")]

    public function deleteComment(Comment $comment, Request $request, EntityManagerInterface $em) : Response
    {
        $csrf_token = $request->request->all();

        if ($this->isCsrfTokenValid('commentDelete', $csrf_token['csrf_token'])) {

            $em->remove($comment);
            $em->flush();

            $this->addFlash('success', 'Commentaire supprimé avec succès');
            
            return $this->redirectToRoute('home');
        }
    }
}
