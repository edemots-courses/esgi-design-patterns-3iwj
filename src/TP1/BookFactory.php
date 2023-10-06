<?php

namespace DesignPatterns\TP1;

interface BookFactory
{
    public function createFictionBook(string $title, string $author, string $isbn, string $date): FictionBook;
    public function createHistoryBook(string $title, string $author, string $isbn, string $date): HistoryBook;
}
