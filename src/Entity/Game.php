<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GameRepository")
 * @ORM\Table(name="games")
 */
class Game
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $leaderboard = false;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $api = null;

    public function getId()
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

    public function getLeaderboard(): ?bool
    {
        return $this->leaderboard;
    }

    public function setLeaderboard(bool $leaderboard): self
    {
        $this->leaderboard = $leaderboard;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getApi(): ?string
    {
        return $this->api;
    }

    public function setApi(?string $api): self
    {
        $this->api = $api;

        return $this;
    }
}
