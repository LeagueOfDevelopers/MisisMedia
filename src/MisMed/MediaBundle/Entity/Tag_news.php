<?php
// src/MisMed/MediaBundle/Entity/Tag_news.php
namespace MisMed\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tag_news")
 */
class Tag_news
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="Tag", inversedBy="id")
     * @ORM\JoinColumn(name="id_tag", referencedColumnName="id")
     */
    protected $id_tag;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="News", inversedBy="id")
     * @ORM\JoinColumn(name="id_news", referencedColumnName="id")
     */
    protected $id_news;


    /**
     * Set idTag
     *
     * @param integer $idTag
     *
     * @return Tag_news
     */
    public function setIdTag($idTag)
    {
        $this->id_tag = $idTag;

        return $this;
    }

    /**
     * Get idTag
     *
     * @return integer
     */
    public function getIdTag()
    {
        return $this->id_tag;
    }

    /**
     * Set idNews
     *
     * @param integer $idNews
     *
     * @return Tag_news
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


}
