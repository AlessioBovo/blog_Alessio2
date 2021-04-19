<?php

namespace App\Entity;

use App\Repository\CommentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentsRepository::class)
 */
class Comments
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
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity=Articles::class, inversedBy="comments")
     */
    private $id_Article;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="comments")
     */
    private $Id_User;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $creation_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getIdArticle(): ?Articles
    {
        return $this->id_Article;
    }

    public function setIdArticle(?Articles $id_Article): self
    {
        $this->id_Article = $id_Article;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->Id_User;
    }

    public function setIdUser(?User $Id_User): self
    {
        $this->Id_User = $Id_User;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creation_date;
    }

    public function setCreationDate(?\DateTimeInterface $creation_date): self
    {
        $this->creation_date = $creation_date;

        return $this;
    }
}
