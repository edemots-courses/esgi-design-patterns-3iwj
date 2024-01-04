<?php

namespace DesignPatterns\TP1;

class EnglishBookFactory implements BookFactory
{
    public function createFictionBook(string $title, string $author, string $isbn, string $date): FictionBook
    {
        return new FictionBook($title, $author, "en-GB", $isbn, $date);
    }

    public function createHistoryBook(string $title, string $author, string $isbn, string $date): HistoryBook
    {
        return new HistoryBook($title, $author, "en-GB", $isbn, $date);
    }
}
