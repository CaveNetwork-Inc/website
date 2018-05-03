<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentRepository")
 * @ORM\Table(name="comments")
 */
class Comment
{
    /**
     * @orm\id()
     * @orm\generatedvalue()
     * @orm\column(type="integer")
     */
    private $id;

    /**
     * @orm\manytoone(targetEntity="app\entity\user", inversedBy="comments")
     * @orm\joincolumn(nullable=false)
     */
    private $author;

    /**
     * @orm\column(type="datetime")
     */
    private $created_at;

    /**
     * @orm\column(type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @orm\column(type="text")
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Thread", inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $thread;

    public function getid()
    {
        return $this->id;
    }

    public function getauthor(): ?user
    {
        return $this->author;
    }

    public function setauthor(?user $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getcreatedat(): ?\datetimeinterface
    {
        return $this->created_at;
    }

    public function setcreatedat(\datetimeinterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getupdatedat(): ?\datetimeinterface
    {
        return $this->updated_at;
    }

    public function setupdatedat(\datetimeinterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getcontent(): ?string
    {
        return $this->content;
    }

    public function setcontent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getThread(): ?Thread
    {
        return $this->thread;
    }

    public function setThread(?Thread $thread): self
    {
        $this->thread = $thread;

        return $this;
    }
}
