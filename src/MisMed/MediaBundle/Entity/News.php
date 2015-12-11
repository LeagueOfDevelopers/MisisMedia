<?php
// src/MisMed/MediaBundle/Entity/News.php
namespace MisMed\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="news")
 * @ORM\HasLifecycleCallbacks
 */
class News
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="id_news")
     * @ORM\OneToMany(targetEntity="Img", mappedBy="id_news")
     * @ORM\OneToMany(targetEntity="Tag_news", mappedBy="id_news")
     */
    protected $id;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $desc_short;

    /**
     * @ORM\Column(type="text")
     */
    protected $desc_long;

    /**
     * @ORM\Column(type="date")
     */
    protected $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $author;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $link;


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
        $this->desc_short = $descShort;

        return $this;
    }

    /**
     * Get descShort
     *
     * @return string
     */
    public function getDescShort()
    {
        return $this->desc_short;
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
        $this->desc_long = $descLong;

        return $this;
    }

    /**
     * Get descLong
     *
     * @return string
     */
    public function getDescLong()
    {
        return $this->desc_long;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return News
     *
     * @ORM\PrePersist
     */
    public function setDate()
    {
        $this->date = new \DateTime('now');;

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

?>
