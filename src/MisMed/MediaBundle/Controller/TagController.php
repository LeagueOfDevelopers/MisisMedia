<?php
// src/MisMed/MediaBundle/Controller/TagController.php
use MisMed\MediaBundle\Entity\Tag;
use Symfony\Component\HttpFoundation\Response;  // Почему-то не видит это

public function createAction($name)
{
    $tag = new Tag();
    $tag->setName($name);
    /*
     $comment->setIdNews($is_news);
    Нужно ли это здесь, ведь у нас есть связи??
     */


    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($tag);
    $em->flush();
}
?>