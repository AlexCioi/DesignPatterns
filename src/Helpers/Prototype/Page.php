<?php

namespace App\Helpers\Prototype;

//this represents the prototype class
class Page
{
    private $title;

    private $body;

    private $author;

    private $comments = [];

    private $date;

    public function __construct(string $title, string $body, Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->date = new \DateTime();
    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    public function __clone()
    {
        $this->title = "Copy of " . $this->title;
        $this->author->addToPages($this);
        $this->comments = [];
        $this->date = new \DateTime();
    }
}