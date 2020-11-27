<?php

namespace App\Entity;

use App\Repository\TextureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TextureRepository::class)
 */
class Texture
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
    private $texture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexture(): ?string
    {
        return $this->texture;
    }

    public function setTexture(string $texture): self
    {
        $this->texture = $texture;

        return $this;
    }
}
