<?php

namespace App\Controller;

use App\Repository\WishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
}
