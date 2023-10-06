<?php

namespace DesignPatterns\TP1;

class HistoryBook implements Book
{
    /**
     * Constructor property promotion
     */
    public function __construct(
        protected string $title,
        protected string $author,
        protected string $lang,
    ) {}

    public function getDetails(): string 
    {
        return match ($this->lang) {
            "fr" => "{$this->title} écrit par {$this->author}.",
            "en" => "{$this->title} written by {$this->author}.",
            default => throw new Exception("Unknown language {$this->lang}."),
        };
    }
}
