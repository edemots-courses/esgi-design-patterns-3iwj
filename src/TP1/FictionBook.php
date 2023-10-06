<?php

namespace DesignPatterns\TP1;

use Exception;

class FictionBook implements Book
{
    protected string $title;

    protected string $author;

    protected string $lang;
    
    public function __construct(string $title, string $author, string $lang)
    {
        $this->title = $title;
        $this->author = $author;
        $this->lang = $lang;
    }

    public function getDetails(): string 
    {
        return match ($this->lang) {
            "fr" => "{$this->title} écrit par {$this->author}.",
            "en" => "{$this->title} written by {$this->author}.",
            default => throw new Exception("Unknown language {$this->lang}."),
        };
    }
}
