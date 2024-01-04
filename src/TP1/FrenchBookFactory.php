<?php

namespace DesignPatterns\TP1;

class FrenchBookFactory implements BookFactory
{
    public function createFictionBook(string $title, string $author, string $isbn, string $date): FictionBook
    {
        return new FictionBook($title, $author, "fr-FR", $isbn, $date);
    }

    public function createHistoryBook(string $title, string $author, string $isbn, string $date): HistoryBook
    {
        return new HistoryBook($title, $author, "fr-FR", $isbn, $date);
    }
}
