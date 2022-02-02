<?php

namespace App\Controller;

use App\Entity\Images;
use App\Classes\search;
use App\Entity\Comment;
use App\Form\CommentType;
use App\Form\SearchType;
use App\Repository\CommentRepository;
use App\Repository\ImagesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class HomeController extends AbstractController
{

    #[Route('/', name: 'home')]

    public function index(ImagesRepository $imagesRepo, Request $request) : Response
    {
        //$images = $imagesRepo->findBy([], ['createdAt' => 'DESC']);
        $page = (int) $request->query->get('page', 1);
        $limit = 8;
        $pagination = true;
        $images = $imagesRepo->getPages($page, $limit);

        $total = $imagesRepo->getTotalImages();

        $search = new search();
        $form = $this->createForm(SearchType::class, $search);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pagination = false;
            $search = $form->getData();
 
            if ($search->categories === [] && $search->string === null) {
                $pagination = true;
                $images = $imagesRepo->getPages($page, $limit);

                $total = $imagesRepo->getTotalImages();
            }
            else {
                $images = $imagesRepo->findWithCat($search);
            }
            
        }

        
        return $this->render('home/index.html.twig', [
            'images' => $images,
            'formulaire' => $form->createView(),
            'total' => $total,
            'page' => $page,
            'limit' => $limit,
            'pagination' => $pagination,
        ]);
    }




    #[Route('/image/{id<[0-9]+>}', name: 'home_image_show')]

    public function show(int $id, Images $image, CommentRepository $commentRepo, Request $request, EntityManagerInterface $em) : Response
    {
        $showComments = $commentRepo->findBy(['image' => $id], ['createdAt' => 'DESC']);

        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $comment = $form->getData();
           
            $comment->setUser($this->getUser());
            $comment->setImage($image);
            
       

            $em -> persist($comment);
            $em -> flush();
            
            $this->addFlash('success', 'Commentaire ajouté avec succès');
            return $this->redirectToRoute('home');
        }
       

        return $this->render('home/show.html.twig', [
            'image' => $image,
            'formulaire' => $form->createView(),
            'showComments' => $showComments
        ]);
       
    }

}
