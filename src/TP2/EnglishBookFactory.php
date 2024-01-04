<?php

namespace DesignPatterns\TP2;

class EnglishBookFactory implements BookFactory
{
    public function createFictionBook(string $title, string $author, string $isbn, string $date, int $price, int $pegi): FictionBook
    {
        return new FictionBook($title, $author, "en-GB", $isbn, $date, $price, $pegi);
    }

    public function createHistoryBook(string $title, string $author, string $isbn, string $date, int $price, int $pegi): HistoryBook
    {
        return new HistoryBook($title, $author, "en-GB", $isbn, $date, $price, $pegi);
    }
}
