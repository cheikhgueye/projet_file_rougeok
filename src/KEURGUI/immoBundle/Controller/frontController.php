<?php

namespace KEURGUI\immoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use KEURGUI\immoBundle\Entity\CHERCHE;
use KEURGUI\immoBundle\Entity\client;
use KEURGUI\immoBundle\Entity\contrat;
use KEURGUI\immoBundle\Entity\bien;
use KEURGUI\immoBundle\Entity\reservation;
use KEURGUI\immoBundle\Form\connexionType;
use KEURGUI\immoBundle\Form\CHERCHEType;
use Symfony\Component\HttpFoundation\Request;
use KEURGUI\immoBundle\Entity\connexion;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use FOS\RestBundle\Controller\Annotations\Get; // N'oublons pas d'inclure Get

class frontController extends Controller
{
    public function CatalogAction()
    {
        $res = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:Bien')
        ->findAll();

        return $res;
    }

    /**
     * @Route("front/bien/search")
     */
    public function searchBienAction(Request $request)
    {
        $fine = new CHERCHE();
        $form = $this->createForm(CHERCHEType::class, $fine);
        if ($request->isMethod('POST')) {
            $type = $_POST['keurgui_immobundle_cherche']['types'];
            $localite = $_POST['keurgui_immobundle_cherche']['localites'];
            $prix = $_POST['keurgui_immobundle_cherche']['prix'];
            if ($type == '' && $localite == '' && $prix != '') {
                $em = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien');
                $utrouv = $em->findBienp($prix);

                return $this->render('KEURGUIimmoBundle:front:affiche.html.twig', array(
                        'x' => $utrouv,
               ));
            } elseif ($type != '' && $localite == '' && $prix == '') {
                $em = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien');
                $utrouv = $em->findBient($type);

                return $this->render('KEURGUIimmoBundle:front:affiche.html.twig', array(
                        'x' => $utrouv,
               ));
            } elseif ($type == '' && $localite != '' && $prix == '') {
                $em = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien');
                $utrouv = $em->findBienl($localite);

                return $this->render('KEURGUIimmoBundle:front:affiche.html.twig', array(
                        'x' => $utrouv,
               ));
            } elseif ($type == '' && $localite == '' && $prix == '') {
                $res = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien')
                ->findAll();

                return $this->render('KEURGUIimmoBundle:front:search_bien.html.twig', array('form' => $form->createView(), 'x' => $res));
            } elseif ($type == '' && $localite != '' && $prix != '') {
                $em = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien');
                $utrouv = $em->findBienlp($localite, $prix);

                return $this->render('KEURGUIimmoBundle:front:affiche.html.twig', array(
                        'x' => $utrouv,
               ));
            } elseif ($type != '' && $localite == '' && $prix != '') {
                $em = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien');
                $utrouv = $em->findBienpt($prix, $type);

                return $this->render('KEURGUIimmoBundle:front:affiche.html.twig', array(
                        'x' => $utrouv,
               ));
            } elseif ($type != '' && $localite != '' && $prix == '') {
                $em = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien');
                $utrouv = $em->findBienlt($localite, $type);

                return $this->render('KEURGUIimmoBundle:front:affiche.html.twig', array(
                        'x' => $utrouv,
               ));
            } else {
                $em = $this->getDoctrine()
           ->getManager()
           ->getRepository('KEURGUIimmoBundle:bien');
                $utrouv = $em->findBien($localite, $prix, $type);

                return $this->render('KEURGUIimmoBundle:front:affiche.html.twig', array(
          'x' => $utrouv,
 ));
            }
        }
        $res = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:bien')
        ->findAll();

        return $this->render('KEURGUIimmoBundle:front:search_bien.html.twig', array('form' => $form->createView(), 'x' => $res));
    }

    public function resAction($id, $idb)
    {
        $res = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:reservation')
        ->fr();

        $client = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:client')
        ->find($id);
        $bien = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:bien')
        ->find($idb);
        $reservation = new reservation();
        $date = date('Y-m-d');
        $reservation->setEtat(0);
        $reservation->setDate($date);
        $reservation->setBien($bien);
        $reservation->setClient($client);
        $em = $this->getDoctrine()->getManager();
        $em->persist($reservation);
        $em->flush();

        return $this->render('KEURGUIimmoBundle:front:reser.html.twig', array(
           'bien' => $bien,
            'client' => $client,
            'x' => $res,
   ));
    }

    public function affResAction()
    {
        $res = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:reservation')
        ->fr();

        return $this->render('KEURGUIimmoBundle:front:y.html.twig', array(
            'x' => $res,
   ));
    }

    public function connectAction(Request $request)
    {
        $connection = new connexion();
        $form = $this->createForm(connexionType::class, $connection);
        if ($request->isMethod('POST')) {
            $login = $_POST['keurgui_immobundle_connexion']['login'];
            $pass = $_POST['keurgui_immobundle_connexion']['password'];
            $res = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:client')
        ->findBy(array(
            'email' => $login,
            'password' => $pass,
        ));

            $session = new Session();
            $session->set('id_client', $res[0]->getId());

            $em = $this->getDoctrine()
            ->getManager()
            ->getRepository('KEURGUIimmoBundle:bien');
            $utrouv = $em->findAll();

            return $this->redirectToRoute('fine', array('x' => $utrouv));
        }

        return $this->render('KEURGUIimmoBundle:front:formLog.html.twig', array('form' => $form->createView()));
    }

    public function validResAction($idb, $idc)
    {
        $client = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:client')
        ->find($idc);
        $bien = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:bien')
        ->find($idb);
        $contrat = new contrat();
        $reservation = new reservation();
        $reservation->setEtat(1);
        $date = date('Y/m/d');
        $contrat->setCaution(1000000);
        $contrat->setDatecontrat($date);
        $contrat->setBien($bien);
        $contrat->setDuree('1ans');
        $contrat->setClient($client);
        $em = $this->getDoctrine()->getManager();
        $em->persist($contrat);
        $em->flush();

        return new Response('contrat etablie');
    }
}
