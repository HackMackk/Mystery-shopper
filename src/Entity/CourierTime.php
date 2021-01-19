<?php

namespace App\Entity;

use App\Repository\CourierTimeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CourierTimeRepository::class)
 */
class CourierTime
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
    private $c_time;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCTime(): ?string
    {
        return $this->c_time;
    }

    public function setCTime(string $c_time): self
    {
        $this->c_time = $c_time;

        return $this;
    }
    public function __toString() {
        return $this->c_time;
    }
}
