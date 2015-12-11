<?php
// src\MisMed\MediaBundle\Entity\Us_portfolio.php

namespace MisMed\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="us_portfolio")
 */
class Us_portfolio
{
    /**
     * @ORM\Column(type="integer")
     * @OneToOne(targetEntity="Users", orphanRemoval=true)
     */
    protected $id_user;

    /**
     * @ORM\Column(type="integer")
     *  @OneToOne(targetEntity="Portfolio", orphanRemoval=true)
     */
    protected $id_portf;

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Us_portfolio
     */
    public function setIdUser($idUser)
    {
        $this->id_user = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set idPortf
     *
     * @param integer $idPortf
     *
     * @return Us_portfolio
     */
    public function setIdPortf($idPortf)
    {
        $this->id_portf = $idPortf;

        return $this;
    }

    /**
     * Get idPortf
     *
     * @return integer
     */
    public function getIdPortf()
    {
        return $this->id_portf;
    }
}
