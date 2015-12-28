<?php

namespace MisMed\MediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MisMed\MediaBundle\Entity\TagNews;
use MisMed\MediaBundle\Form\TagNewsType;

/**
 * TagNews controller.
 *
 * @Route("/tagnews")
 */
class TagNewsController extends Controller
{
    /**
     * Lists all TagNews entities.
     *
     * @Route("/", name="tagnews_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tagNews = $em->getRepository('MisMedMediaBundle:TagNews')->findAll();

        return $this->render('tagnews/index.html.twig', array(
            'tagNews' => $tagNews,
        ));
    }

    /**
     * Creates a new TagNews entity.
     *
     * @Route("/new", name="tagnews_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tagNews = new TagNews();
        $form = $this->createForm(new TagNewsType(), $tagNews);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tagNews);
            $em->flush();

            return $this->redirectToRoute('tagnews_show', array('id' => $tagnews->getId()));
        }

        return $this->render('tagnews/new.html.twig', array(
            'tagNews' => $tagNews,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TagNews entity.
     *
     * @Route("/{id}", name="tagnews_show")
     * @Method("GET")
     */
    public function showAction(TagNews $tagNews)
    {
        $deleteForm = $this->createDeleteForm($tagNews);

        return $this->render('tagnews/show.html.twig', array(
            'tagNews' => $tagNews,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TagNews entity.
     *
     * @Route("/{id}/edit", name="tagnews_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TagNews $tagNews)
    {
        $deleteForm = $this->createDeleteForm($tagNews);
        $editForm = $this->createForm(new TagNewsType(), $tagNews);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tagNews);
            $em->flush();

            return $this->redirectToRoute('tagnews_edit', array('id' => $tagNews->getId()));
        }

        return $this->render('tagnews/edit.html.twig', array(
            'tagNews' => $tagNews,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TagNews entity.
     *
     * @Route("/{id}", name="tagnews_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TagNews $tagNews)
    {
        $form = $this->createDeleteForm($tagNews);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tagNews);
            $em->flush();
        }

        return $this->redirectToRoute('tagnews_index');
    }

    /**
     * Creates a form to delete a TagNews entity.
     *
     * @param TagNews $tagNews The TagNews entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TagNews $tagNews)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tagnews_delete', array('id' => $tagNews->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
