<?php

namespace App\Controller;


use App\Entity\Recette;
use App\Entity\Recipes;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{

    /**
     * Page d'accueil de notre site.
     * Configuration de notre route dans routes.yaml
     */
    public function index() {
        # Initialisation de $message
        $message = '';

        # Récupération des variables de session
        $session = $this->get('session');

        # Récupération de l'ID de l'auteur
        $auteurId = $session->get('userId');

        # Recherche des recettes de l'auteur
        $recettes = $this->getDoctrine()
            ->getRepository(Recipes::class)
            ->findAll();

        //die();

        return $this->render('index/index.html.twig', [
            'recettes'          => $recettes,
            'message'           => $message,
        ]);
    }




    // ------------------------------------------------------------






    public function sidebar() {

        return $this->render('components/_sidebar.html.twig', [

        ]);

    }


    // ------------------------------------------------------------



    public function sidebarleft() {
        return $this->render('components/_sidebarleft.html.twig', [

        ]);
    }


    // ------------------------------------------------------------




    public function menu() {
        return $this->render('onglets/menu.html.twig', [
            'test' => 'Salut'
        ]);
    }


    // ------------------------------------------------------------


    public function onglets() {
        return $this->render('components/_onglet.html.twig', []);
    }


    // ------------------------------------------------------------


    public function alakazamQuestions() {
        return $this->render('alakazam/questions.html.twig', []);
    }


    // ------------------------------------------------------------


    public function mesrecettes() {
        # Initialisation de $message
        $message = '';

        # Récupération des variables de session
        $session = $this->get('session');

        # Récupération de l'ID de l'auteur
        $auteurId = $session->get('userId');

        # Recherche des recettes de l'auteur
        $recettes = $this->getDoctrine()
            ->getRepository(Recipes::class)
            ->findAuteur($auteurId);

        return $this->render('user/mesrecettes.html.twig', [
            'recettes' => $recettes,
            'message' => $message
        ]);
    }



    // ------------------------------------------------------------


    public function navbar() {
        return $this->render('components/_nav.html.twig');
    }



    // ------------------------------------------------------------


    public function plats() {
        return $this->render('commun/liste-plats.html.twig');
    }



    // -------------------------------------------------------------
    public function user() {
        #Récupération des variables de session
        $session = $this->get('session');

        # Récupération de l'ID de l'auteur
        $auteurId = $session->get('userId');

        # Récupération de l'utilisateur
        $auteur =  $this->getDoctrine()
            ->getRepository(User::class)
            ->find($auteurId);

        return $this->render('components/_interface-utilisateur.html.twig', [
            'user' => $auteur
        ]);
    }

}
