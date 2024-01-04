<?php

namespace DesignPatterns\TP2;

class Library implements LibraryInterface
{
    public function readBook(Book $book, int $age): Book
    {
        return $book;   
    }
}
