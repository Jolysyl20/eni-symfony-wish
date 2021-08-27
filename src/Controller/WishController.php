<?php

namespace App\Controller;

use App\Entity\Wish;
use App\Repository\WishRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishController extends AbstractController
{

    /**
     * @Route("/wish", name="wish")
     */
    public function wish(WishRepository $repo): Response
    {
        $wishes = $repo->findBy(['isPublished' => true], ['dateCreated'=>'DESC']);

        return $this->render('main/wish.html.twig', [
            'wishes' => $wishes
        ]);
    }

    /**
     * @Route("wish/modifyMyWish/{id}", name="modifyMyWish")
     */

    public function modifyMyWish(Wish $wish, Request $request, EntityManagerInterface  $em): Response
    {

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
        return $this->render(
            'main/modifyMyWish.html.twig',
            ['formWish' => $formWish->createView()]
        );
    }
        /**
     * @Route("/wish/deleteMyWish/{id}", name="deleteMyWish")
     */
    public function deleteMyWish(Wish $wish, EntityManagerInterface  $em): Response
    {

        $em->remove($wish);
        $em->flush();
        return $this->redirectToRoute('home');
    }
}
