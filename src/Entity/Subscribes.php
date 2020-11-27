<?php

namespace App\Entity;

use App\Repository\SubscribesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SubscribesRepository::class)
 */
class Subscribes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $pricePerMonth;

    /**
     * @ORM\ManyToOne(targetEntity=Rent::class, inversedBy="subscribes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $rent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPricePerMonth(): ?int
    {
        return $this->pricePerMonth;
    }

    public function setPricePerMonth(int $pricePerMonth): self
    {
        $this->pricePerMonth = $pricePerMonth;

        return $this;
    }

    public function getRent(): ?Rent
    {
        return $this->rent;
    }

    public function setRent(?Rent $rent): self
    {
        $this->rent = $rent;

        return $this;
    }
}
