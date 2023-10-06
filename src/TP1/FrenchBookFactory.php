<?php

namespace DesignPatterns\TP1;

class FrenchBookFactory implements BookFactory
{
    public function createFictionBook(string $title, string $author): FictionBook
    {
        return new FictionBook($title, $author, "fr");
    }

    public function createHistoryBook(string $title, string $author): HistoryBook
    {
        return new HistoryBook($title, $author, "fr");
    }
}
