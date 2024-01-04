<?php

namespace DesignPatterns\TP2;

use Exception;

class BookBuilder
{
    protected string $type;

    protected string $title;

    protected string $author;

    protected string $isbn;

    protected string $lang;

    protected string $date;

    protected int $price;

    protected int $pegi;

    public function fictional()
    {
        $this->type = "fiction";

        return $this;
    }

    public function historical()
    {
        $this->type = "history";

        return $this;
    }

    public function title(string $title)
    {
        $this->title = $title;

        return $this;
    }

    public function author(string $author)
    {
        $this->author = $author;

        return $this;
    }

    public function isbn(string $isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function french()
    {
        $this->lang = "fr-FR";

        return $this;
    }

    public function english()
    {
        $this->lang = "en-GB";

        return $this;
    }

    public function writtenAt(string $date)
    {
        $this->date = $date;

        return $this;
    }

    public function priceInCents(int $price)
    {
        $this->price = $price;

        return $this;
    }

    public function pegi3() {
        return $this->pegi(3);
    }

    public function pegi7() {
        return $this->pegi(7);
    }

    public function pegi15() {
        return $this->pegi(15);
    }

    public function pegi18() {
        return $this->pegi(18);
    }

    protected function pegi(int $age)
    {
        $this->pegi = $age;

        return $this;
    }

    public function build(): Book
    {
        $factory = match ($this->lang) {
            "fr-FR" => new FrenchBookFactory(),
            "en-GB" => new EnglishBookFactory(),
            default => throw new Exception("Language {$this->lang} not supported."),
        };

        return match ($this->type) {
            "fiction" => $factory->createFictionBook($this->title, $this->author, $this->isbn, $this->date, $this->price, $this->pegi),
            "history" => $factory->createHistoryBook($this->title, $this->author, $this->isbn, $this->date, $this->price, $this->pegi),
            default => throw new Exception("Book type {$this->type} not supported."),
        };
    }
}
