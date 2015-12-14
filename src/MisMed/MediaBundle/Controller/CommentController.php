<?php
// src/MisMed/MediaBundle/Controller/CommentController.php
use MisMed\MediaBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Response;  // ������-�� �� ����� ���

public function createAction($title, $text, $name)
{
    $comment = new Comment();
    $comment->setTitle($title);
    $comment->setText($text);
    $comment->setName($name);
    /*
     $comment->setIdNews($is_news);
    ����� �� ��� �����, ���� � ��� ���� �����??
     */


    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($comment);
    $em->flush();
}
?>