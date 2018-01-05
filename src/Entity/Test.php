<?php
# src/Entity/Test.php

/**
 * Header - General Platform Template
 *
 * @author      Anzoumana SANOGO
 */

namespace sylax\Entity;

use sylax\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Entity(repositoryClass=TestRepository::class)
 * @ORM\Table(name="test")
 */
class Test
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer", name="id")
    */
    private $id;

   /**
    * @ORM\Column(type="string", name="libelle", length=255)
    */
    private $libelle;

   /**
    * @ORM\Column(type="datetime", name="created")
    */
    private $created;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->created = new \DateTime();
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Test
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Test
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

}