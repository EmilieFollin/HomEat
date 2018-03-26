<?php

namespace App\Controller;

use App\Entity\Address;
//use Doctrine\DBAL\Types\IntegerType;
//use Doctrine\DBAL\Types\TextType;
use App\Entity\Status;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Orders;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class OrdersController extends Controller
{
    /**
     * @Route("/commande", name="commande")
     */
    public function commande(Request $request){
//
//        // On crée une nouvelle order
//
//
        $order = new Orders();

        # Récupération des variables de session
//        if(!isset($session)) {$session = new Session();}
//
//        $session->get('userName', $auteur->getFirstname() . ' ' . $auteur->getName());
//        $session->get('userId',$auteur->getId());

//        endif;


        # Récupération du role
        $status = $this->getDoctrine()
            ->getRepository(Status::class)
            ->find(1);


        # Sauvegarde du role
        $order->setStatus($status);
//
        $formBuilder = $this->createFormBuilder($order);
//
//        //On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder = $this->createFormBuilder($order)
            ->add('quantities', IntegerType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'placeholder' => 'La quantité a vendre',
                    'class' => 'form-control'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ]);


            // À partir du formBuilder, on génère le formulaire
            $form = $formBuilder->getForm();


        # Traitement des données POST
        $form->handleRequest($request);

        # Vérification des données du Formulaire
        if ($form->isSubmitted()) :

            # Récupération des données
            $order = $form->getData();


            # Insertion en BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($order);
            $em->flush();


            # Redirection vers l'index
            return $this->render('index/index.html.twig', []);
        else :
            # Affichage de la Vue
            return $this->render('commun/commande.html.twig', [
                'form' => $form->createView(),
                'test'=> true,
            ]);
        endif;

        return $this->render('commun/commande.html.twig',[
            'form' => $form->createView(),
            'test'=> true,
        ]);
    }

//
//    //////////////////////////////////////////////////////////////////
//    // ---------------------------------------------------- Addresse Save
//    //////////////////////////////////////////////////////////////////
//
//
//    /**
//     * Paramètre
//     * @Route("/add-address", name="addressSave")
//     */
//
//
//    public function addressSave(Request $request)
//    {
//
//        //////Ajout d'une adresse en BDD/////
//
//        // On crée une nouvelle address
//        $address = new Address();
//
//
//        # Vérification des données du Formulaire
//        if (true) :
//
//            dump($_POST);
//
//            # Récupération des données
//            $address->setStreet($_POST['form']['street']);
//            $address->setZipCode($_POST['form']['zip_code']);
//            $address->setCity($_POST['form']['city']);
//            $address->setNumber($_POST['form']['number']);
//            $address->setComment($_POST['form']['comment']);
//
//
//            # Insertion en BDD
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($address);
//            $em->flush();
//
//
//            # Redirection vers l'index
//            return $this->render('index/index.html.twig', []);
//        else :
//            # Affichage de la Vue
//            return $this->render('user/params.html.twig', [
//                'form' => $form->createView(),
//                'test'=> true,
//            ]);
//        endif;
//
//        return $this->render('user/params.html.twig',[
//            'form' => $form->createView(),
//            'test'=> true,
//        ]);
//
//







}