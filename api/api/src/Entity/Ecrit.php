<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\EcritRepository")
 */
class Ecrit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contenu;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateEcrit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="integer")
     */
    private $idAuteur;

    /**
     * @ORM\Column(type="integer")
     */
    private $idAmi;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDateEcrit(): ?\DateTimeInterface
    {
        return $this->dateEcrit;
    }

    public function setDateEcrit(\DateTimeInterface $dateEcrit): self
    {
        $this->dateEcrit = $dateEcrit;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getIdAuteur(): ?int
    {
        return $this->idAuteur;
    }

    public function setIdAuteur(int $idAuteur): self
    {
        $this->idAuteur = $idAuteur;

        return $this;
    }

    public function getIdAmi(): ?int
    {
        return $this->idAmi;
    }

    public function setIdAmi(int $idAmi): self
    {
        $this->idAmi = $idAmi;

        return $this;
    }
}
