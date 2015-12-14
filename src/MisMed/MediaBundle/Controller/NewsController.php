<?php
// src/MisMed/MediaBundle/Controller/NewsController.php
use MisMed\MediaBundle\Entity\News;
use Symfony\Component\HttpFoundation\Response; // Почему-то не видит это

public function createAction($title, $desc_short, $desc_long, $date, $author, $link, $status)
{
    $news = new News();
    $news->setTitle($title);
    $news->setDescShort($desc_short);
    $news->setDescLong($desc_long);
    $news->setDate();
    $news->setAuthor($author);
    $news->setLink($link);

    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($news);
    $em->flush();

    return new Response('Created product id '.$news->getId());
}
?>