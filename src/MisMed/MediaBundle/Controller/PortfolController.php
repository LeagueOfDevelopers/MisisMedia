<?php

namespace MisMed\MediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MisMed\MediaBundle\Entity\Portfol;
use MisMed\MediaBundle\Form\PortfolType;

/**
 * Portfol controller.
 *
 * @Route("/portfol")
 */
class PortfolController extends Controller
{
    /**
     * Lists all Portfol entities.
     *
     * @Route("/", name="portfol_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $portfols = $em->getRepository('MisMedMediaBundle:Portfol')->findAll();

        return $this->render('portfol/index.html.twig', array(
            'portfols' => $portfols,
        ));
    }

    /**
     * Creates a new Portfol entity.
     *
     * @Route("/new", name="portfol_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $portfol = new Portfol();
        $form = $this->createForm(new PortfolType(), $portfol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($portfol);
            $em->flush();

            return $this->redirectToRoute('portfol_show', array('id' => $portfol->getId()));
        }

        return $this->render('portfol/new.html.twig', array(
            'portfol' => $portfol,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Portfol entity.
     *
     * @Route("/{id}", name="portfol_show")
     * @Method("GET")
     */
    public function showAction(Portfol $portfol)
    {
        $deleteForm = $this->createDeleteForm($portfol);

        return $this->render('portfol/show.html.twig', array(
            'portfol' => $portfol,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Portfol entity.
     *
     * @Route("/{id}/edit", name="portfol_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Portfol $portfol)
    {
        $deleteForm = $this->createDeleteForm($portfol);
        $editForm = $this->createForm(new PortfolType(), $portfol);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($portfol);
            $em->flush();

            return $this->redirectToRoute('portfol_edit', array('id' => $portfol->getId()));
        }

        return $this->render('portfol/edit.html.twig', array(
            'portfol' => $portfol,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Portfol entity.
     *
     * @Route("/{id}", name="portfol_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Portfol $portfol)
    {
        $form = $this->createDeleteForm($portfol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($portfol);
            $em->flush();
        }

        return $this->redirectToRoute('portfol_index');
    }

    /**
     * Creates a form to delete a Portfol entity.
     *
     * @param Portfol $portfol The Portfol entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Portfol $portfol)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('portfol_delete', array('id' => $portfol->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
