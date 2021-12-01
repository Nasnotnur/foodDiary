<?php
// src/Controller/produitController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse; 
use Symfony\Component\HttpFoundation\Session\SessionInterface; 
use Symfony\Component\HttpFoundation\Cookie;
use Twig\Environment;

/**
 * @Route("/produit")
 */
class produitController extends AbstractController 
{
    //Affiche la liste des produits
    /**
     * @Route("/", name="produit_index")
     */
    public function index(Environment $twig) {

        $listProduits = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('App:Produit')
                ->findAll();

        $content = $twig->render('Produit/index.html.twig', array(
           'listProduits' => $listProduits
       ));

       return new Response($content);
    }
}
