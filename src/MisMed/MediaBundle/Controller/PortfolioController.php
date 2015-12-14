<?php
// src/MisMed/MediaBundle/Controller/PortfolioController.php
use MisMed\MediaBundle\Entity\Portfolio;
use Symfony\Component\HttpFoundation\Response;  // ������-�� �� ����� ���

public function createAction($image, $text, $name)
{
    $portfolio = new Portfolio();
    $portfolio->setImage($image);

    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($portfolio);
    $em->flush();
}
?>