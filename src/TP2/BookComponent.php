<?php

namespace DesignPatterns\TP2;

interface BookComponent
{
    public function getIdentifier(): string;

    public function showDetails(int $depth = 0): void;
}
