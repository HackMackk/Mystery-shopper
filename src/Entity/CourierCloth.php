<?php

namespace App\Entity;

use App\Repository\CourierClothRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CourierClothRepository::class)
 */
class CourierCloth
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
    private $c_cloth;

    public function __toString() {
        return $this->c_cloth;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCCloth(): ?string
    {
        return $this->c_cloth;
    }

    public function setCCloth(string $c_cloth): self
    {
        $this->c_cloth = $c_cloth;

        return $this;
    }
}
