<?php

namespace DesignPatterns\TP1;

use Exception;

class BookBuilder
{
    protected string $type;

    protected string $title;

    protected string $author;

    protected string $isbn;

    protected string $lang;

    protected string $date;

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
        $this->lang = "fr";

        return $this;
    }

    public function english()
    {
        $this->lang = "en";

        return $this;
    }

    public function writtenAt(string $date)
    {
        $this->date = $date;

        return $this;
    }

    public function build(): Book
    {
        $factory = match ($this->lang) {
            "fr" => new FrenchBookFactory(),
            "en" => new EnglishBookFactory(),
            default => throw new Exception("Language {$this->lang} not supported."),
        };

        return match ($this->type) {
            "fiction" => $factory->createFictionBook($this->title, $this->author, $this->isbn, $this->date),
            "history" => $factory->createHistoryBook($this->title, $this->author, $this->isbn, $this->date),
            default => throw new Exception("Book type {$this->type} not supported."),
        };
    }
}
