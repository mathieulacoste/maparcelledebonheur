<?php

namespace MaParcelleDeBonheurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parcelles
 *
 * @ORM\Table(name="parcelles")
 * @ORM\Entity(repositoryClass="MaParcelleDeBonheurBundle\Repository\ParcellesRepository")
 */
class Parcelles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     */
    private $matricule;

    /**
     * @var integer
     */
    private $street;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var integer
     */
    private $area;

    public function __toString()
    {
        return $this->matricule;
    }
    /**
     * Set street
     *
     * @param integer $street
     *
     * @return Parcelles
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return integer
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Parcelles
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set area
     *
     * @param integer $area
     *
     * @return Parcelles
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return integer
     */
    public function getArea()
    {
        return $this->area;
    }



    /**
     * Set matricule.
     *
     * @param string $matricule
     *
     * @return Parcelles
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule.
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @var \MaParcelleDeBonheurBundle\Entity\Locataires
     */
    private $locataires;


    /**
     * Set locataires.
     *
     * @param \MaParcelleDeBonheurBundle\Entity\Locataires|null $locataires
     *
     * @return Parcelles
     */
    public function setLocataires(\MaParcelleDeBonheurBundle\Entity\Locataires $locataires = null)
    {
        $this->locataires = $locataires;

        return $this;
    }

    /**
     * Get locataires.
     *
     * @return \MaParcelleDeBonheurBundle\Entity\Locataires|null
     */
    public function getLocataires()
    {
        return $this->locataires;
    }
}
