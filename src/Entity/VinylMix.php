<?php

namespace App\Entity;

use App\Repository\VinylMixRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VinylMixRepository::class)]
class VinylMix
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $trackCount = null;

    #[ORM\Column(length: 255)]
    private ?string $genre = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt ;

    #[ORM\Column]
    private ?int $votes = 0;

    public function __construct(
        string $title,
        ?string $description,
        int $trackCount,
        string $genre,
        \DateTimeImmutable $createdAt,
        int $votes = 0
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->trackCount = $trackCount;
        $this->genre = $genre;
        $this->createdAt = $createdAt;
        $this->votes = $votes;
    }
}
