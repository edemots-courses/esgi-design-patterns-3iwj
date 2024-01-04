<?php

namespace DesignPatterns\TP2;

interface LibraryInterface
{
    public function readBook(Book $book, int $age): Book;
}
