<?php
// src/MisMed/MediaBundle/Controller/UsersController.php
use MisMed\MediaBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Response; // Почему-то не видит это

public function createAction($name, $login, $password, $email, $institute, $sex, $status)
{
    $user = new Users();
    $user->setName($name);
    $user->setLogin($login);
    $user->setPassword($password);
    $user->setEmail($email);
    $user->setInstitut($institute);
    $user->setSex($sex);
    $user->setStatus($status);

    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($user);
    $em->flush();
}
?>