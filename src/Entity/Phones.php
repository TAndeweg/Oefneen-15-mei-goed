<?php

namespace App\Entity;

use App\Repository\PhonesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhonesRepository::class)]
class Phones
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $iphone = null;

    #[ORM\Column(length: 255)]
    private ?string $samsung = null;

    #[ORM\Column(length: 255)]
    private ?string $huawai = null;

    #[ORM\Column(length: 255)]
    private ?string $banaantje = null;

    #[ORM\Column(length: 255)]
    private ?string $plane = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIphone(): ?string
    {
        return $this->iphone;
    }

    public function setIphone(string $iphone): static
    {
        $this->iphone = $iphone;

        return $this;
    }

    public function getSamsung(): ?string
    {
        return $this->samsung;
    }

    public function setSamsung(string $samsung): static
    {
        $this->samsung = $samsung;

        return $this;
    }

    public function getHuawai(): ?string
    {
        return $this->huawai;
    }

    public function setHuawai(string $huawai): static
    {
        $this->huawai = $huawai;

        return $this;
    }

    public function getBanaantje(): ?string
    {
        return $this->banaantje;
    }

    public function setBanaantje(string $banaantje): static
    {
        $this->banaantje = $banaantje;

        return $this;
    }

    public function getPlane(): ?string
    {
        return $this->plane;
    }

    public function setPlane(string $plane): static
    {
        $this->plane = $plane;

        return $this;
    }
}
