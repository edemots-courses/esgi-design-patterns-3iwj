<?php

namespace DesignPatterns\TP2;

interface BookFactory
{
    public function createFictionBook(string $title, string $author, string $isbn, string $date, int $price, int $pegi): FictionBook;
    public function createHistoryBook(string $title, string $author, string $isbn, string $date, int $price, int $pegi): HistoryBook;
}
