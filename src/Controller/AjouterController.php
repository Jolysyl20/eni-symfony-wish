<?php

namespace App\Controller;

use App\Entity\Wish;
use App\Form\WishType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjouterController extends AbstractController
{
    /**
     * @Route("/add", name="add")
     */
    public function ajouter(Request $request, EntityManagerInterface $em): Response
    {
        $wish = new Wish();
        $formWish = $this->createForm(WishType::class, $wish);
        $formWish->handleRequest($request);

        if ($formWish-> isSubmitted() && $formWish->isValid())
        {
            $wish->setIsPublished(true);
            $wish->setDateCreated(new \DateTime());
            $em->persist($wish);
            $em->flush();
            $this->addFlash('succes', 'wish added :)');
            return $this->redirectToRoute('wish');    
        }
    
        return $this->render('main/ajouter.html.twig',[
            'formWish' => $formWish->createView()
        ]);

    }
}
