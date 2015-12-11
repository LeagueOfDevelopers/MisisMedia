<?php
// src/MisMed/MediaBundle/Entity/Portfolio.php
namespace MisMed\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="portfolio")
 */
class Portfolio
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @OneToOne(targetEntity="Us_portfolio", orphanRemoval=true)
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     * @OneToOne(targetEntity="Us_portfolio", orphanRemoval=true)
     */
    protected $id_user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $image;


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
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Portfolio
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
     * Set image
     *
     * @param string $image
     *
     * @return Portfolio
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}
