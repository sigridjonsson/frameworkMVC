<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="books")
 */
class Books
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $title;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $isbn;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $author;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $picture;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getISBN()
    {
        return $this->isbn;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setISBN($isbn)
    {
        $this->isbn = $isbn;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setPicture($picture)
    {
        $this->picture = $picture;
    }
}
