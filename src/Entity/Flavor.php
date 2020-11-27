<?php

namespace App\Entity;

use App\Repository\FlavorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FlavorRepository::class)
 */
class Flavor
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
    private $gout;

    /**
     * @ORM\OneToOne(targetEntity=Product::class, mappedBy="product_flavor", cascade={"persist", "remove"})
     */
    private $product_flavor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGout(): ?string
    {
        return $this->gout;
    }

    public function setGout(string $gout): self
    {
        $this->gout = $gout;

        return $this;
    }

    public function getProductFlavor(): ?Product
    {
        return $this->product_flavor;
    }

    public function setProductFlavor(Product $product_flavor): self
    {
        $this->product_flavor = $product_flavor;

        // set the owning side of the relation if necessary
        if ($product_flavor->getProductFlavor() !== $this) {
            $product_flavor->setProductFlavor($this);
        }

        return $this;
    }
}
