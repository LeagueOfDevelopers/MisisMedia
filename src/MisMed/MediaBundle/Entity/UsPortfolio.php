<?php

namespace MisMed\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsPortfolio
 *
 * @ORM\Table(name="us_portfolio")
 * @ORM\Entity
 */
class UsPortfolio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_portf", type="integer", nullable=false)
     */
    private $idPortf;


}

