<?php

namespace MisMed\MediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MisMed\MediaBundle\Entity\UsPortfolio;
use MisMed\MediaBundle\Form\UsPortfolioType;

/**
 * UsPortfolio controller.
 *
 * @Route("/usportfolio")
 */
class UsPortfolioController extends Controller
{
    /**
     * Lists all UsPortfolio entities.
     *
     * @Route("/", name="usportfolio_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $usPortfolios = $em->getRepository('MisMedMediaBundle:UsPortfolio')->findAll();

        return $this->render('usportfolio/index.html.twig', array(
            'usPortfolios' => $usPortfolios,
        ));
    }

    /**
     * Creates a new UsPortfolio entity.
     *
     * @Route("/new", name="usportfolio_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $usPortfolio = new UsPortfolio();
        $form = $this->createForm(new UsPortfolioType(), $usPortfolio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usPortfolio);
            $em->flush();

            return $this->redirectToRoute('usportfolio_show', array('id' => $usportfolio->getId()));
        }

        return $this->render('usportfolio/new.html.twig', array(
            'usPortfolio' => $usPortfolio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a UsPortfolio entity.
     *
     * @Route("/{id}", name="usportfolio_show")
     * @Method("GET")
     */
    public function showAction(UsPortfolio $usPortfolio)
    {
        $deleteForm = $this->createDeleteForm($usPortfolio);

        return $this->render('usportfolio/show.html.twig', array(
            'usPortfolio' => $usPortfolio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing UsPortfolio entity.
     *
     * @Route("/{id}/edit", name="usportfolio_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, UsPortfolio $usPortfolio)
    {
        $deleteForm = $this->createDeleteForm($usPortfolio);
        $editForm = $this->createForm(new UsPortfolioType(), $usPortfolio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usPortfolio);
            $em->flush();

            return $this->redirectToRoute('usportfolio_edit', array('id' => $usPortfolio->getId()));
        }

        return $this->render('usportfolio/edit.html.twig', array(
            'usPortfolio' => $usPortfolio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a UsPortfolio entity.
     *
     * @Route("/{id}", name="usportfolio_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, UsPortfolio $usPortfolio)
    {
        $form = $this->createDeleteForm($usPortfolio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usPortfolio);
            $em->flush();
        }

        return $this->redirectToRoute('usportfolio_index');
    }

    /**
     * Creates a form to delete a UsPortfolio entity.
     *
     * @param UsPortfolio $usPortfolio The UsPortfolio entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UsPortfolio $usPortfolio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usportfolio_delete', array('id' => $usPortfolio->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
