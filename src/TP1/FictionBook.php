<?php

namespace DesignPatterns\TP1;

use Exception;

class FictionBook implements Book
{
    protected string $title;

    protected string $author;

    protected string $lang;

    protected string $isbn;

    protected string $date;
    
    public function __construct(
        string $title, 
        string $author, 
        string $lang, 
        string $isbn, 
        string $date
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->lang = $lang;
        $this->isbn = $isbn;
        $this->date = $date;
    }

    public function getDetails(): string 
    {
        return match ($this->lang) {
            "fr-FR" => "{$this->title} ({$this->isbn}) écrit par {$this->author} en {$this->date}.",
            "en-GB" => "{$this->title} ({$this->isbn}) written by {$this->author} in {$this->date}.",
            default => throw new Exception("Unknown language {$this->lang}."),
        };
    }
}
