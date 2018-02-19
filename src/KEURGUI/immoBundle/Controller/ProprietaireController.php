<?php

namespace KEURGUI\immoBundle\Controller;

use KEURGUI\immoBundle\Entity\Proprietaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Proprietaire controller.
 *
 * @Route("proprietaire")
 */
class ProprietaireController extends Controller
{
    /**
     * Lists all proprietaire entities.
     *
     * @Route("/", name="proprietaire_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $proprietaires = $em->getRepository('KEURGUIimmoBundle:Proprietaire')->findAll();

        return $this->render('proprietaire/index.html.twig', array(
            'proprietaires' => $proprietaires,
        ));
    }

    /**
     * Creates a new proprietaire entity.
     *
     * @Route("/new", name="proprietaire_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $proprietaire = new Proprietaire();
        $form = $this->createForm('KEURGUI\immoBundle\Form\ProprietaireType', $proprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($proprietaire);
            $em->flush();

            return $this->redirectToRoute('proprietaire_show', array('id' => $proprietaire->getId()));
        }

        return $this->render('proprietaire/new.html.twig', array(
            'proprietaire' => $proprietaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a proprietaire entity.
     *
     * @Route("/{id}", name="proprietaire_show")
     * @Method("GET")
     */
    public function showAction(Proprietaire $proprietaire)
    {
        $deleteForm = $this->createDeleteForm($proprietaire);

        return $this->render('proprietaire/show.html.twig', array(
            'proprietaire' => $proprietaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing proprietaire entity.
     *
     * @Route("/{id}/edit", name="proprietaire_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Proprietaire $proprietaire)
    {
        $deleteForm = $this->createDeleteForm($proprietaire);
        $editForm = $this->createForm('KEURGUI\immoBundle\Form\ProprietaireType', $proprietaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('proprietaire_edit', array('id' => $proprietaire->getId()));
        }

        return $this->render('proprietaire/edit.html.twig', array(
            'proprietaire' => $proprietaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a proprietaire entity.
     *
     * @Route("/{id}", name="proprietaire_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Proprietaire $proprietaire)
    {
        $form = $this->createDeleteForm($proprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($proprietaire);
            $em->flush();
        }

        return $this->redirectToRoute('proprietaire_index');
    }

    /**
     * Creates a form to delete a proprietaire entity.
     *
     * @param Proprietaire $proprietaire The proprietaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Proprietaire $proprietaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('proprietaire_delete', array('id' => $proprietaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
