<?php
// src\MisMed\MediaBundle\Entity\Img.php

namespace MisMed\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="img")
 */
class Img
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="News", inversedBy="id")
     * @ORM\JoinColumn(name="id_news", referencedColumnName="id")
     */
    protected $id_news;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $img;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $status;



    /**
     * Set idNews
     *
     * @param integer $idNews
     *
     * @return Img
     */
    public function setIdNews($idNews)
    {
        $this->id_news = $idNews;

        return $this;
    }

    /**
     * Get idNews
     *
     * @return integer
     */
    public function getIdNews()
    {
        return $this->id_news;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Img
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Img
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
