<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
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
    private $product_name;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $product_description;

    /**
     * @ORM\Column(type="float")
     */
    private $product_price;

    /**
     * @ORM\Column(type="float")
     */
    private $product_priceKg;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $product_region;

    /**
     * @ORM\Column(type="integer")
     */
    private $product_conditioning;


    /**
     * @ORM\OneToOne(targetEntity=Texture::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $product_texture;

    /**
     * @ORM\OneToOne(targetEntity=Intensity::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $product_intensity;

    /**
     * @ORM\OneToOne(targetEntity=Flavor::class, inversedBy="product_flavor", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $product_flavor;

    /**
     * @ORM\ManyToOne(targetEntity=Order::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $orders;

    /**
     * @ORM\ManyToOne(targetEntity=Apiculteur::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $apiculteur;

    /**
     * @ORM\OneToMany(targetEntity=Review::class, mappedBy="product")
     */
    private $reviews;

    /**
     * @ORM\OneToOne(targetEntity=Type::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity=Utilisation::class, mappedBy="product")
     */
    private $utilisations;

    public function __construct()
    {
        $this->product_label = new ArrayCollection();
        $this->reviews = new ArrayCollection();
        $this->utilisations = new ArrayCollection();
    }


    public function getProductName(): ?string
    {
        return $this->product_name;
    }

    public function setProductName(string $product_name): self
    {
        $this->product_name = $product_name;

        return $this;
    }

    public function getProductDescription(): ?string
    {
        return $this->product_description;
    }

    public function setProductDescription(string $product_description): self
    {
        $this->product_description = $product_description;

        return $this;
    }

    public function getProductPrice(): ?int
    {
        return $this->product_price;
    }

    public function setProductPrice(int $product_price): self
    {
        $this->product_price = $product_price;

        return $this;
    }

    public function getProductPriceKg(): ?int
    {
        return $this->product_priceKg;
    }

    public function setProductPriceKg(int $product_priceKg): self
    {
        $this->product_priceKg = $product_priceKg;

        return $this;
    }

    public function getProductRegion(): ?string
    {
        return $this->product_region;
    }

    public function setProductRegion(string $product_region): self
    {
        $this->product_region = $product_region;

        return $this;
    }


    public function getProductConditioning(): ?int
    {
        return $this->product_conditioning;
    }

    public function setProductConditioning(int $product_conditioning): self
    {
        $this->product_conditioning = $product_conditioning;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductTexture(): ?Texture
    {
        return $this->product_texture;
    }

    public function setProductTexture(Texture $product_texture): self
    {
        $this->product_texture = $product_texture;

        return $this;
    }

    public function getProductIntensity(): ?Intensity
    {
        return $this->product_intensity;
    }

    public function setProductIntensity(Intensity $product_intensity): self
    {
        $this->product_intensity = $product_intensity;

        return $this;
    }

    public function getProductFlavor(): ?Flavor
    {
        return $this->product_flavor;
    }

    public function setProductFlavor(Flavor $product_flavor): self
    {
        $this->product_flavor = $product_flavor;

        return $this;
    }


    public function getOrders(): ?Order
    {
        return $this->orders;
    }

    public function setOrders(?Order $orders): self
    {
        $this->orders = $orders;

        return $this;
    }

    public function getApiculteur(): ?Apiculteur
    {
        return $this->apiculteur;
    }

    public function setApiculteur(?Apiculteur $apiculteur): self
    {
        $this->apiculteur = $apiculteur;

        return $this;
    }

    /**
     * @return Collection|Review[]
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function addReview(Review $review): self
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews[] = $review;
            $review->setProduct($this);
        }

        return $this;
    }

    public function removeReview(Review $review): self
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getProduct() === $this) {
                $review->setProduct(null);
            }
        }

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(Type $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection|Utilisation[]
     */
    public function getUtilisations(): Collection
    {
        return $this->utilisations;
    }

    public function addUtilisation(Utilisation $utilisation): self
    {
        if (!$this->utilisations->contains($utilisation)) {
            $this->utilisations[] = $utilisation;
            $utilisation->setProduct($this);
        }

        return $this;
    }

    public function removeUtilisation(Utilisation $utilisation): self
    {
        if ($this->utilisations->removeElement($utilisation)) {
            // set the owning side to null (unless already changed)
            if ($utilisation->getProduct() === $this) {
                $utilisation->setProduct(null);
            }
        }

        return $this;
    }

};  