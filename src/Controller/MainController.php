<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\WishRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Wish;
use App\Form\WishType;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('main/home.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
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
     * @Route("/ajouter", name="ajouter")
     */
    public function ajouter(EntityManagerInterface $em): Response
    {
       
        $wish = new Wish();
        $wish ->setTitle('apprendre');
        $wish ->setDescription('apprendre a developper');
        $wish ->setAuthor('sylvain');
        $wish ->setIsPublished(True);
        $wish ->setDateCreated(new \DateTime());
        $em->persist($wish);
        $em->flush();
        return $this->redirect('wish');
    }

      /**
     * @Route("/add", name="add")
     */
    public function add(EntityManagerInterface $em): Response
    {
        $wish = new Wish();
        $formWish = $this->createForm(WishType::class,$wish);
        //création d'un objetformulaire associé l'entité $wish
      /*  $wish = new Wish();
        $wish ->setTitle('apprendre');
        $wish ->setDescription('apprendre a developper');
        $wish ->setAuthor('sylvain');
        $wish ->setIsPublished(True);
        $wish ->setDateCreated(new \DateTime());
        $em->persist($wish);
        $em->flush();*/
        return $this->render('main/ajouter.html.twig',[
            'formWish' => $formWish->createView()
        ]);

    }

    /**
     * @Route("/about-us", name="about_us")
     */
    public function about(): Response
    {
        return $this->render('main/about.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
