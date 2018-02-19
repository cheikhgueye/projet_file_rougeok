
<?php

namespace KEURGUI\immoBundle\Controller;

use KEURGUI\immoBundle\Entity\Bien;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Bien controller.
 *
 * @Route("bien")
 */
class BienController extends Controller
{
    /**
     * Lists all bien entities.
     *
     * @Route("/", name="bien_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $biens = $em->getRepository('KEURGUIimmoBundle:Bien')->findAll();

        return $this->render('bien/index.html.twig', array(
            'biens' => $biens,
        ));
    }

    /**
     * Creates a new bien entity.
     *
     * @Route("/new", name="bien_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $bien = new Bien();
        $form = $this->createForm('KEURGUI\immoBundle\Form\BienType', $bien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bien);
            $em->flush();

            return $this->redirectToRoute('bien_show', array('id' => $bien->getId()));
        }

        return $this->render('bien/new.html.twig', array(
            'bien' => $bien,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a bien entity.
     *
     * @Route("/{id}", name="bien_show")
     * @Method("GET")
     */
    public function showAction(Bien $bien)
    {
        $deleteForm = $this->createDeleteForm($bien);

        return $this->render('bien/show.html.twig', array(
            'bien' => $bien,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing bien entity.
     *
     * @Route("/{id}/edit", name="bien_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Bien $bien)
    {
        $deleteForm = $this->createDeleteForm($bien);
        $editForm = $this->createForm('KEURGUI\immoBundle\Form\BienType', $bien);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bien_edit', array('id' => $bien->getId()));
        }

        return $this->render('bien/edit.html.twig', array(
            'bien' => $bien,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a bien entity.
     *
     * @Route("/{id}", name="bien_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Bien $bien)
    {
        $form = $this->createDeleteForm($bien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bien);
            $em->flush();
        }

        return $this->redirectToRoute('bien_index');
    }

    /**
     * Creates a form to delete a bien entity.
     *
     * @param Bien $bien The bien entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Bien $bien)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bien_delete', array('id' => $bien->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
