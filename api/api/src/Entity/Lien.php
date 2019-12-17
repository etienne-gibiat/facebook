<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LienRepository")
 */
class Lien
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idUtilisateur1;

    /**
     * @ORM\Column(type="integer")
     */
    private $idUtilisateur2;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $etat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUtilisateur1(): ?int
    {
        return $this->idUtilisateur1;
    }

    public function setIdUtilisateur1(int $idUtilisateur1): self
    {
        $this->idUtilisateur1 = $idUtilisateur1;

        return $this;
    }

    public function getIdUtilisateur2(): ?int
    {
        return $this->idUtilisateur2;
    }

    public function setIdUtilisateur2(int $idUtilisateur2): self
    {
        $this->idUtilisateur2 = $idUtilisateur2;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
}
