<?php
// src/MisMed/MediaBundle/Controller/ImgController.php
use MisMed\MediaBundle\Entity\Img;
use Symfony\Component\HttpFoundation\Response;  // Почему-то не видит это

public function createAction($src_img, $status)
{
    $img = new Img();
    $img->setImg($src_img);
    $img->setStatus($status);

    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($img);
    $em->flush();
}
?>