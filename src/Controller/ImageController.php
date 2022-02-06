<?php

namespace App\Controller;

use App\Entity\Images;
use App\Form\ImageType;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class ImageController extends AbstractController
{

    #[Route('/nouvelle/image', name: 'create_image')]
    #[Security("is_granted('ROLE_USERACTIVE')")]

    public function index(Request $request, EntityManagerInterface $em): Response
    {

        $image = new Images;
        $form = $this->createForm(ImageType::class, $image);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            if (null !== $image->getImageFile()) {

                $image->setUser($this->getUser());
                $em -> persist($image);
                $em -> flush();

                $this->addFlash('success', 'Image postée avec succès');
                return $this->redirectToRoute('home');
            }
            else {
                
                $this->addFlash('danger', 'Veuillez choisir une image');
            }
        }

        return $this->render('image/create.html.twig', [
            'formulaire' => $form->createView(),
        ]);
    }

   
    #[Route('/image/{id<[0-9]+>}/modifier', name: 'edit_image')]
    #[Security("is_granted('ROLE_USERACTIVE') and image.getUser() == user")]

    public function edit(Request $request, EntityManagerInterface $em, Images $image)
    {
        $form = $this->createForm(ImageType::class, $image);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            if (null !== $image->getImageName()) {
                $em->flush();

                $this->addFlash('success', 'Image modifiée avec succès');
                return $this->redirectToRoute('account');
            }
            else {
                $this->addFlash('success', 'Veuillez choisir une image');
            }
        }

        return $this->render('image/edit.html.twig', [
            'image' => $image, 
            'formulaire' => $form->createView(),
        ]);
    }

    #[Route('/image/{id<[0-9]+>}/supprimer', name: 'delete_image', methods: 'POST')]
    #[Security("is_granted('ROLE_USERACTIVE') and image.getUser() == user")]

    public function delete(Request $request, EntityManagerInterface $em, Images $image)
    {
        $csrf_token = $request->request->all();
        
        if ($this->isCsrfTokenValid('imageDelete', $csrf_token['csrf_token'])) {

            $em->remove($image);
            $em->flush();

            $this->addFlash('success', 'Image supprimée avec succès');
            
            return $this->redirectToRoute('account');
        }
    }
}
