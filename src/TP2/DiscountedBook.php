<?php

namespace DesignPatterns\TP2;

use Exception;
use NumberFormatter;

class DiscountedBook implements Book
{
    public function __construct(protected Book $book)
    {
    }

    public function getTitle(): string
    {
        return $this->book->getTitle();
    }

    public function getPegi(): int
    {
        return $this->book->getPegi();
    }

    public function getFormattedPrice(): string
    {
        $formatter = new NumberFormatter($this->book->lang, NumberFormatter::CURRENCY);
        return $formatter->format($this->getPrice() / 100);
    }

    public function getPrice(): int
    {
        return round($this->book->getPrice() * 0.9);
    }

    public function getDetails(): string
    {
        return match ($this->book->lang) {
            "fr-FR" => "{$this->book->title} ({$this->book->isbn}) écrit par {$this->book->author} en {$this->book->date} au prix de {$this->getFormattedPrice()}(\e[9m{$this->book->getFormattedPrice()}\e[0m).",
            "en-GB" => "{$this->book->title} ({$this->book->isbn}) written by {$this->book->author} in {$this->book->date} at a price of {$this->getFormattedPrice()}(\e[9m{$this->book->getFormattedPrice()}\e[0m).",
            default => throw new Exception("Unknown language {$this->book->lang}."),
        };
    }

    public function getIdentifier(): string
    {
        return $this->book->getIdentifier();
    }

    public function showDetails(int $depth = 0): void
    {
        echo implode("", array_fill(0, $depth, "\t"))."• ".$this->getDetails().PHP_EOL;
    }

    
}
