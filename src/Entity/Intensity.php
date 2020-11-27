<?php

namespace App\Entity;

use App\Repository\IntensityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IntensityRepository::class)
 */
class Intensity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imgIntensity;

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

    public function getImgIntensity(): ?string
    {
        return $this->imgIntensity;
    }

    public function setImgIntensity(string $imgIntensity): self
    {
        $this->imgIntensity = $imgIntensity;

        return $this;
    }
}
