<?php

namespace App\Entity;

use App\Repository\CourierMaskRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CourierMaskRepository::class)
 */
class CourierMask
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
    private $c_mask;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCMask(): ?string
    {
        return $this->c_mask;
    }

    public function setCMask(string $c_mask): self
    {
        $this->c_mask = $c_mask;

        return $this;
    }

    public function __toString() {
        return $this->c_mask;
    }
}
