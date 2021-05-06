<?php

namespace Mos\Books;

class Books
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var int
     */
    protected $isbn;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var string§
     */
    protected $picture;

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
        return $this->$author;
    }

    public function getPicture()
    {
        return $this->$picture;
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
