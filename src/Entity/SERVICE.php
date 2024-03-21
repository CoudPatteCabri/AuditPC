<?php

namespace App\Entity;

use App\Repository\SERVICERepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SERVICERepository::class)]
class SERVICE
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $service = null;

    #[ORM\Column(length: 255)]
    private ?string $POSTE = null;

    #[ORM\Column]
    private ?bool $INTUNE = null;

    #[ORM\Column]
    private ?bool $DEFENDER = null;
    
    #[ORM\Column(length: 255)]
    private ?string $PROBLEME = null;
    
    #[ORM\Column(length: 255)]
    private ?string $ECRAN = null;
    #[ORM\Column]

    private ?bool $SOURIS = null;
    #[ORM\Column]

    private ?bool $CLAVIER = null;
    #[ORM\Column]

    private ?string $ENCEINTE = null;
    #[ORM\Column]

    private ?bool $WEBCAM = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(string $service): static
    {
        $this->service = $service;

        return $this;
    }

    public function getPOSTE(): ?string
    {
        return $this->POSTE;
    }

    public function setPOSTE(string $POSTE): static
    {
        $this->POSTE = $POSTE;

        return $this;
    }

    public function getINTUNE(): ?int
    {
        return $this->INTUNE;
    }

    public function setINTUNE(bool $INTUNE): static
    {
        $this->INTUNE = $INTUNE;

        return $this;
    }

    public function isDEFENDER(): ?bool
    {
        return $this->DEFENDER;
    }

    public function setDEFENDER(bool $DEFENDER): static
    {
        $this->DEFENDER = $DEFENDER;

        return $this;
    }

    public function isSOURIS(): ?bool
    {
        return $this->SOURIS;
    }

    public function setSOURIS(bool $SOURIS): static
    {
        $this->SOURIS = $SOURIS;

        return $this;
    }

    public function isCLAVIER(): ?bool
    {
        return $this->CLAVIER;
    }

    public function setCLAVIER(bool $CLAVIER): static
    {
        $this->CLAVIER = $CLAVIER;

        return $this;
    }

    public function isWEBCAM(): ?bool
    {
        return $this->WEBCAM;
    }

    public function setWEBCAM(bool $WEBCAM): static
    {
        $this->WEBCAM = $WEBCAM;

        return $this;
    }

    public function getPROBLEME(): ?string
    {
        return $this->PROBLEME;
    }

    public function setPROBLEME(string $PROBLEME): static
    {
        $this->PROBLEME = $PROBLEME;

        return $this;
    }

    public function getECRAN(): ?string
    {
        return $this->ECRAN;
    }

    public function setECRAN(string $ECRAN): static
    {
        $this->ECRAN = $ECRAN;

        return $this;
    }

    public function getENCEINTE(): ?string
    {
        return $this->ENCEINTE;
    }

    public function setENCEINTE(string $ENCEINTE): static
    {
        $this->ENCEINTE = $ENCEINTE;

        return $this;
    }
}
