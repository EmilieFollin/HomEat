<?php

namespace App\Controller;

use App\Controller\Helper;
use App\Entity\Auteur;
use App\Entity\CategoriesRecipes;
use App\Entity\Orders;
use App\Entity\Recipes;
use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class ArticleController extends Controller
{

    use Helper;



        //////////////////////////////////////////////////////////////////
      // ------------------------------------------------------ SIGNIN
    //////////////////////////////////////////////////////////////////


    /**
     * Formulaire pour ajouter un utilisateur
     * @Route("/signin", name="signin")
     */

    public function signin(Request $request) {

        # Création d'un nouvel utilisateur
        $auteur = new Auteur();

        # Créer le formuaire permettant l'ajout d'un utilisateur
        $form = $this->createFormBuilder($auteur)

            ->add('nom', TextType::class, [
                'required'      => true,
                'label'         => false,
                'attr'          => [
                    'placeholder'   => 'Entrez votre nom ...',
                    'class'         =>  'form-control'
                ]
            ])

            ->add('prenom', TextType::class, [
                'required'      => true,
                'label'         => false,
                'attr'          => [
                    'placeholder'   => 'Entrez votre prenom ...',
                    'class'         => 'form-control'
                ]
            ])

            ->add('email', TextType::class, [
                'required'      => true,
                'label'         => false,
                'attr'          => [
                    'placeholder'   => 'Entrez votre mail ...',
                    'class'         => 'form-control'
                ]
            ])

            ->add('password', TextType::class, [
                'required'      => true,
                'label'         => false,
                'attr'          => [
                    'placeholder'   => 'PASSWORD',
                    'class'         => 'form-control'
                ]
            ])
/*
            ->add('avatar', FileType::class, [
                'required'  => false,
                'label'     => false,
            ])
*/
            ->add('submit', SubmitType::class, [
                'label'         => false,
                'attr'          => [
                    'class'         =>  'btn btn-danger'
                ]
            ])

            ->getForm();

        # Traitement des données POST
        $form->handleRequest($request);

        # Vérification des données du Formulaire
        if ($form->isSubmitted() && $form->isValid()) :
            # Récupération des données
            $auteur = $form->getData();

            # Insertion en BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($auteur);
            $em->flush();

            return $this->redirectToRoute('index');

        endif;

        # Affichage du Formulaire dans la Vue
        return $this->render('user/signin.html.twig', [
            'form' => $form->createView()
        ]);
    }




        //////////////////////////////////////////////////////////////////
      // ------------------------------------------------------ LOGIN
    //////////////////////////////////////////////////////////////////


    /**
     * Formulaire de connexion
     * @Route("/login", name="login")
     */

    public function login(Request $request) {

        # Initialisation de la variable $message
        $message = '';

        # Création d'un nouvel utilisateur
        $auteur = new User();

        # Créer le formuaire permettant l'ajout d'un utilisateur
        $form = $this->createFormBuilder($auteur)

            ->add('mail', TextType::class, [
                'required'      => true,
                'label'         => false,
                'attr'          => [
                    'placeholder'   => 'Entrez votre mail ...',
                    'class'         => 'form-control'
                ]
            ])

            ->add('pass', TextType::class, [
                'required'      => true,
                'label'         => false,
                'attr'          => [
                    'placeholder'   => 'PASSWORD',
                    'class'         => 'form-control'
                ]
            ])

            ->add('submit', SubmitType::class, [
                'label' => false,
                'attr'          => [
                    'value'         => 'login',
                    'class'         => 'btn btn-form'
                ]
            ])

            ->getForm();

        # Traitement des données POST
        $form->handleRequest($request);

        # Vérification des données du Formulaire
        if ($form->isSubmitted() && $form->isValid()) :
            $repository = $this->getDoctrine()
                ->getRepository(User::class);

            # Récupération des données
            $auteur = $form->getData();

            dump($auteur->getMail());

            # On regarde si l'utilisateur est dans la BDD
            $error = $repository->loginUser($auteur->getMail(), $auteur->getPass());

            dump($error);
            //die();

            if(!empty($error[0])) :
                # On ouvre une session (si besoin)
                if(!isset($session)) {$session = new Session();}

                $session->set('userName', $error[0][0]->getFirstname() . ' ' . $error[0][0]->getName());
                $session->set('userId', $error[0][0]->getId());
                $session->set('template','template-01');

                $user = $this->getDoctrine()
                    ->getRepository(User::class)
                    ->find($session->get('userId'));

                $recettes = $this->getDoctrine()
                    ->getRepository(Recipes::class)
                    ->findAll();

                dump($user);
                //die();

                # Redirection
                return $this->render('index/index.html.twig', [
                    'user'          => $user,
                    'recettes'      => $recettes,
                   ]);

            else :
                $message = empty($error[1]) ? 'Email invalide' : 'Password invalide';

                # Affichage du Formulaire dans la Vue
                return $this->render('user/login.html.twig', [
                    'form'      => $form->createView(),
                    'message'   => '<div class="alert alert-danger">' . $message . '</div>'
                ]);

            endif;


        endif;

        # Affichage du Formulaire dans la Vue
        return $this->render('user/login.html.twig', [
            'form'      => $form->createView(),
            'message'   => $message
        ]);
    }




                //////////////////////////////////////////////////////////////////
              // ----------------------------------------------------- LOGOUT
            //////////////////////////////////////////////////////////////////


    /**
     * Formulaire de connexion
     * @Route("/logout", name="logout")
     */

    public function logout(SessionInterface $session) {

        # On sauvegarde et ferme la session
        $session->clear();

        # Retour vers l'index
        return $this->redirectToRoute('index', []);
    }




            //////////////////////////////////////////////////////////////////
          // ----------------------------------------------------- EDITOR
        //////////////////////////////////////////////////////////////////


    /**
     * Formulaire de connexion
     * @Route("/editor", name="editor")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */

    public function editor(Request $request) {

            // INITIALISATION RECETTE

        # Initialisation de la variable $message
        $message = '';

        # Création d'une nouvelle recette
        $recette = new Recipes();

        # Récupération des variables de session
        $session = $this->get('session');

        # Récupération de l'ID de l'auteur
        $auteurId = $session->get('userId');

        # Recherche de l'Auteur de la recette
        $auteur = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($auteurId);

        dump($auteur);

        # Récupération de l'auteur
        $recette->setCuisto($auteur);

        # Récupération de l'image
        $recette->setImage('images/recettes/02.jpg');



//
//            // INITIALISATION ORDER
//
//        # Récupération du prix
//        $order->setPrice(5);
//
//        # Recuperation des commandes
//        $order->setRecipes($recette);
//
//        # Recuperation des infos
//        $order->setQuantities(2);





        # Créer le formuaire permettant l'ajout d'une recette
        $form = $this->createFormBuilder($recette)

            ->add('titre', TextType::class, [
                'required'      => true,
                'label'         => false,
                'attr'          => [
                    'placeholder'   => 'Titre de votre recette...',
                    'class'         => 'form-control'
                ]
            ])

            ->add('description', TextType::class, [
                'required'      => true,
                'label'         => false,
                'attr'          => [
                    'placeholder'   => 'Description',
                    'class'         => 'form-control'
                ]
            ])

            ->add('price', MoneyType::class, [
                'required'      => false,
                'currency'      => 'EUR',
                'label'         => false,
                'empty_data'    => 'Price',
                'attr'          => [
                    'class'         => 'form-control'
                ]
            ])


            ->add('submit', SubmitType::class, [
                'label'         => false,
                'attr'          => [
                    'class'         => 'btn btn-primary'
                ]
            ])

            ->getForm();


        # Traitement des données POST
        $form->handleRequest($request);

        dump($form);
        //die();


        # Vérification des données du Formulaire
        if ($form->isSubmitted()) :

            # Récupération des données
            $recette = $form->getData();

            # Traitement des erreurs
            // [...]

            //dump($recette);
            //die();

            # Insertion en BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($recette);
            //$em->persist($categorie);
            $em->flush();


            # Redirection vers l'index
            return $this->redirectToRoute('index');

        endif;


        # Affichage du Formulaire dans la Vue
        return $this->render('commun/editor.html.twig', [
            'form'      => $form->createView(),
            'message'   => $message
        ]);
    }



        //////////////////////////////////////////////////////////////////
      // ------------------------------------------- ALAKAZAMRESPONSE
    //////////////////////////////////////////////////////////////////


    /**
     * Formulaire de connexion
     * @Route("/alakazamResponse", name="alakazamResponse")
     */

    public function alakazamResponse(SessionInterface $session) {

        # Affichage de la Vue
        return $this->render('alakazam/response.html.twig', []);
    }





        //////////////////////////////////////////////////////////////////
      // -------------------------------------------------- CATEGORIE
    //////////////////////////////////////////////////////////////////


    /**
     * Page permettant d'afficher les articles d'une catégorie
     * @Route("/categorie/{libellecategorie}",
     *     name="categorie",
     *     requirements={"libellecategorie" = "\w+"},
     *     methods={"GET"})
     * @param string $libellecategorie
     * @return Response
     */

    public function categorie($libellecategorie = 'tout') {
        # Récupération de la catégorie (pour récupérer les articles liés à cette catégorie mais fail)
        /*
        $categorie = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findBy(['libelle' => $libellecategorie]);

        dump($categorie);
        */

        # Initialisation de $recettes
        $recettes = [];

        # Récupération des variables de session
        $session = $this->get('session');

        # Récupération de toutes les recettes de l'utilisateur
        $Allrecettes = $this->getDoctrine()
            ->getRepository(Recipes::class)
            ->findBy(['auteur' => $session->get('userId')]);

        # On test la catégorie de chaque recette
        foreach ($Allrecettes as $recette) {
            $categories = $recette->getCategorie();

            foreach ($categories as $categorie)  {
                if($categorie != null) {
                    dump($categorie->getLibelle());
                    if (strtolower($categorie->getLibelle()) == $libellecategorie) {
                        array_push($recettes, $recette);
                    }
                }
            }
        }

       dump($recettes);
       //die();

        if (!$recettes) :
            # Affichage de la Vue
            return $this->render('commun/categorie.html.twig', [
                'message' => 'Aucune recette liées à cette catégorie n\' a été trouvé',
            ]);
        else :
            # Affichage de la Vue
            return $this->render('commun/categorie.html.twig', [
                'recettes' => $recettes,
            ]);
        endif;
    }



                //////////////////////////////////////////////////////////////////
              // -------------------------------------------- PERSONNALISATION
            //////////////////////////////////////////////////////////////////


    /**
     * Formulaire de connexion
     * @Route("/personnalisation", name="personnalisation")
     */

    public function personnalisation() {
        return $this->render('commun/personnalisation.html.twig', []);
    }



                //////////////////////////////////////////////////////////////////
              // ---------------------------------------------- switchTemplate
            //////////////////////////////////////////////////////////////////


    /**
     * Formulaire de connexion
     * @Route("/personnalisation/changement-de-template", name="switchTemplate")
     */

    public function switchTemplate(Session $session) {
        $session->set('template', $_POST['template']);
        return $this->redirectToRoute('index');
    }




                //////////////////////////////////////////////////////////////////
              // ---------------------------------------------- searchRecette
            //////////////////////////////////////////////////////////////////


    /**
     * Formulaire de connexion
     * @Route("/searchRecette", name="searchRecette")
     */

    public function searchRecette() {
        return $this->render('commun/recherche-recette.html.twig', []);
    }






            //////////////////////////////////////////////////////////////////
          // --------------------------------------------- RECHERCHE PLATS
        //////////////////////////////////////////////////////////////////


    /**
     * Formulaire de connexion
     * @Route("/recherche-plats", name="recherchePlats")
     */

    public function recherchePlats() {
        return $this->render('commun/liste-plats.html.twig', []);
    }




    //////////////////////////////////////////////////////////////////
    // ------------------------------------------------------ AUTEUR
    //////////////////////////////////////////////////////////////////



    /**
     * Recherche auteur
     * @Route("/auteur/{id}",
     *     name="auteur",
     *     requirements={"id" = "\d+"},
     *     methods={"GET"})
     * @param integer $id
     * @return Response
     */

    public function auteur($id) {

        $auteur = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($id);

//        $reviews = $this->getDoctrine()
//            ->getRepository(Review::class)
//            ->findByAuteur($id);

        return $this->render('commun/affiche-auteur.html.twig', [
            'auteur'    => $auteur,
         //   'reviews'  => $reviews
        ]);
    }



}