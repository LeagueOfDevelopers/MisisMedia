<?php
// src/MisMed/MediaBundle/Controller/TagController.php
use MisMed\MediaBundle\Entity\Tag;
use Symfony\Component\HttpFoundation\Response;  // ������-�� �� ����� ���

public function createAction($name)
{
    $tag = new Tag();
    $tag->setName($name);
    /*
     $comment->setIdNews($is_news);
    ����� �� ��� �����, ���� � ��� ���� �����??
     */


    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($tag);
    $em->flush();
}
?>