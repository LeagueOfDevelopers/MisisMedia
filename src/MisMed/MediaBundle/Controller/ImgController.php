<?php

namespace MisMed\MediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MisMed\MediaBundle\Entity\Img;
use MisMed\MediaBundle\Form\ImgType;

/**
 * Img controller.
 *
 * @Route("/img")
 */
class ImgController extends Controller
{
    /**
     * Lists all Img entities.
     *
     * @Route("/", name="img_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imgs = $em->getRepository('MisMedMediaBundle:Img')->findAll();

        return $this->render('img/index.html.twig', array(
            'imgs' => $imgs,
        ));
    }

    /**
     * Creates a new Img entity.
     *
     * @Route("/new", name="img_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $img = new Img();
        $form = $this->createForm(new ImgType(), $img);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($img);
            $em->flush();

            return $this->redirectToRoute('img_show', array('id' => $img->getId()));
        }

        return $this->render('img/new.html.twig', array(
            'img' => $img,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Img entity.
     *
     * @Route("/{id}", name="img_show")
     * @Method("GET")
     */
    public function showAction(Img $img)
    {
        $deleteForm = $this->createDeleteForm($img);

        return $this->render('img/show.html.twig', array(
            'img' => $img,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Img entity.
     *
     * @Route("/{id}/edit", name="img_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Img $img)
    {
        $deleteForm = $this->createDeleteForm($img);
        $editForm = $this->createForm(new ImgType(), $img);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($img);
            $em->flush();

            return $this->redirectToRoute('img_edit', array('id' => $img->getId()));
        }

        return $this->render('img/edit.html.twig', array(
            'img' => $img,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Img entity.
     *
     * @Route("/{id}", name="img_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Img $img)
    {
        $form = $this->createDeleteForm($img);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($img);
            $em->flush();
        }

        return $this->redirectToRoute('img_index');
    }

    /**
     * Creates a form to delete a Img entity.
     *
     * @param Img $img The Img entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Img $img)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('img_delete', array('id' => $img->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
