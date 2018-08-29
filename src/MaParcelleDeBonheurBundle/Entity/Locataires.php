<?php

namespace MaParcelleDeBonheurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Locataires
 */
class Locataires
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var integer
     */
    private $phonenumber;

    /**
     * @var string
     */
    private $adress;

    /**
     * @var integer
     */
    private $id;

    public function __toString()
    {
        return $this->name;
    }
    /**
     * Set name
     *
     * @param string $name
     *
     * @return Locataires
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Locataires
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Locataires
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set phonenumber
     *
     * @param integer $phonenumber
     *
     * @return Locataires
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return integer
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Locataires
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

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
     * @var int
     */
    private $postalCode;

    /**
     * @var string
     */
    private $city;


    /**
     * Set postalCode.
     *
     * @param int $postalCode
     *
     * @return Locataires
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode.
     *
     * @return int
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set city.
     *
     * @param string $city
     *
     * @return Locataires
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $parcelles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->parcelles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add parcelle.
     *
     * @param \MaParcelleDeBonheurBundle\Entity\Parcelles $parcelle
     *
     * @return Locataires
     */
    public function addParcelle(\MaParcelleDeBonheurBundle\Entity\Parcelles $parcelle)
    {
        $this->parcelles[] = $parcelle;

        return $this;
    }

    /**
     * Remove parcelle.
     *
     * @param \MaParcelleDeBonheurBundle\Entity\Parcelles $parcelle
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeParcelle(\MaParcelleDeBonheurBundle\Entity\Parcelles $parcelle)
    {
        return $this->parcelles->removeElement($parcelle);
    }

    /**
     * Get parcelles.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParcelles()
    {
        return $this->parcelles;
    }
}
