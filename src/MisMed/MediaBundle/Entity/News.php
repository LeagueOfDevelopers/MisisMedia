<?php

namespace MisMed\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity
 */
class News
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="id_news")
     * @ORM\OneToMany(targetEntity="Img", mappedBy="id_news")
     * @ORM\OneToMany(targetEntity="TagNews", mappedBy="id_news")
     */
    private $id;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }
    /*
    *?
    */

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_short", type="string", length=255, nullable=false)
     */
    private $descShort;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_long", type="text", length=65535, nullable=false)
     */
    private $descLong;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255, nullable=false)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link;



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
     * Set title
     *
     * @param string $title
     *
     * @return News
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set descShort
     *
     * @param string $descShort
     *
     * @return News
     */
    public function setDescShort($descShort)
    {
        $this->descShort = $descShort;

        return $this;
    }

    /**
     * Get descShort
     *
     * @return string
     */
    public function getDescShort()
    {
        return $this->descShort;
    }

    /**
     * Set descLong
     *
     * @param string $descLong
     *
     * @return News
     */
    public function setDescLong($descLong)
    {
        $this->descLong = $descLong;

        return $this;
    }

    /**
     * Get descLong
     *
     * @return string
     */
    public function getDescLong()
    {
        return $this->descLong;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return News
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return News
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return News
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
}
