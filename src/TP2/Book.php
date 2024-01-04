<?php

namespace DesignPatterns\TP2;

interface Book extends BookComponent
{
    public function getPrice(): int;

    public function getFormattedPrice(): string;

    public function getPegi(): int;

    public function getTitle(): string;
    
    public function getDetails(): string;
}
