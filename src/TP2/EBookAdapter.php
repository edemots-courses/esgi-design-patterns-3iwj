<?php

namespace DesignPatterns\TP2;

class EBookAdapter implements EBook
{
    public function __construct(protected Book $book)
    {
    }

    public function getOnlinePrice(): int
    {
        return $this->book->getPrice() * 1.1;
    }
}
