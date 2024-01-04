<?php

namespace DesignPatterns\TP2;

use Exception;

class PegiProxy implements LibraryInterface
{
    public function __construct(protected Library $library)
    {
    }

    public function readBook(Book $book, int $age): Book
    {
        if ($age >= $book->getPegi()) {
            return $this->library->readBook($book, $age);
        }
        throw new Exception("You are too young to read this book.");
    }
}
