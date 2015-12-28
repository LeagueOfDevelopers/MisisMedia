<?php

namespace MisMed\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TagNews
 *
 * @ORM\Table(name="tag_news")
 * @ORM\Entity
 */
class TagNews
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
     * @ORM\Column(name="id_tag", type="integer", nullable=false)
     * @ORM\ManyToOne(targetEntity="Tag", inversedBy="id")
     * @ORM\JoinColumn(name="id_tag", referencedColumnName="id")
     */
    private $idTag;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_news", type="integer", nullable=false)
     * @ORM\ManyToOne(targetEntity="News", inversedBy="id")
     * @ORM\JoinColumn(name="id_news", referencedColumnName="id")
     */
    private $idNews;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTag
     *
     * @param integer $idTag
     *
     * @return TagNews
     */
    public function setIdTag($idTag)
    {
        $this->idTag = $idTag;

        return $this;
    }

    /**
     * Get idTag
     *
     * @return integer
     */
    public function getIdTag()
    {
        return $this->idTag;
    }

    /**
     * Set idNews
     *
     * @param integer $idNews
     *
     * @return TagNews
     */
    public function setIdNews($idNews)
    {
        $this->idNews = $idNews;

        return $this;
    }

    /**
     * Get idNews
     *
     * @return integer
     */
    public function getIdNews()
    {
        return $this->idNews;
    }
}
