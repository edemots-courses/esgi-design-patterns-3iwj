<?php

namespace DesignPatterns\TP2;

use Exception;
use NumberFormatter;

abstract class AbstractBook implements Book
{
    /**
     * Constructor property promotion
     */
    public function __construct(
        public string $title,
        public string $author,
        public string $lang,
        public string $isbn,
        public string $date,
        protected int $price,
        protected int $pegi,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getDetails(): string 
    {
        return match ($this->lang) {
            "fr-FR" => "{$this->title} ({$this->isbn}) écrit par {$this->author} en {$this->date} au prix de {$this->getFormattedPrice()}.",
            "en-GB" => "{$this->title} ({$this->isbn}) written by {$this->author} in {$this->date} at a price of {$this->getFormattedPrice()}.",
            default => throw new Exception("Unknown language {$this->lang}."),
        };
    }

    public function getIdentifier(): string
    {
        return $this->isbn;
    }

    public function getFormattedPrice(): string
    {
        $formatter = new NumberFormatter($this->lang, NumberFormatter::CURRENCY);
        return $formatter->format($this->getPrice() / 100);
    }

    public function getPegi(): int
    {
        return $this->pegi;
    }

    public function showDetails(int $depth = 0): void
    {
        echo implode("", array_fill(0, $depth, "\t"))."• ".$this->getDetails().PHP_EOL;
    }
}
