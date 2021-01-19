<?php

namespace App\Entity;

use App\Repository\CourierEndRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CourierEndRepository::class)
 */
class CourierEnd
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
    private $c_end;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCEnd(): ?string
    {
        return $this->c_end;
    }

    public function setCEnd(string $c_end): self
    {
        $this->c_end = $c_end;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function __toString() {
        return $this->c_end;
    }
}
