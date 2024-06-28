<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $googleBookId = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $subtitle = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $publishDate = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 10)]
    private ?string $isbn10 = null;

    #[ORM\Column(length: 13)]
    private ?string $isbn13 = null;

    #[ORM\Column]
    private ?int $pageCount = null;

    #[ORM\Column(length: 255)]
    private ?string $smallThumbnail = null;

    #[ORM\Column(length: 255)]
    private ?string $thumbnail = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGoogleBookId(): ?string
    {
        return $this->googleBookId;
    }

    public function setGoogleBookId(string $googleBookId): static
    {
        $this->googleBookId = $googleBookId;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle): static
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getPublishDate(): ?\DateTimeInterface
    {
        return $this->publishDate;
    }

    public function setPublishDate(\DateTimeInterface $publishDate): static
    {
        $this->publishDate = $publishDate;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getIsbn10(): ?string
    {
        return $this->isbn10;
    }

    public function setIsbn10(string $isbn10): static
    {
        $this->isbn10 = $isbn10;

        return $this;
    }

    public function getIsbn13(): ?string
    {
        return $this->isbn13;
    }

    public function setIsbn13(string $isbn13): static
    {
        $this->isbn13 = $isbn13;

        return $this;
    }

    public function getPageCount(): ?int
    {
        return $this->pageCount;
    }

    public function setPageCount(int $pageCount): static
    {
        $this->pageCount = $pageCount;

        return $this;
    }

    public function getSmallThumbnail(): ?string
    {
        return $this->smallThumbnail;
    }

    public function setSmallThumbnail(string $smallThumbnail): static
    {
        $this->smallThumbnail = $smallThumbnail;

        return $this;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(string $thumbnail): static
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }
}
