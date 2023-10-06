<?php

require_once "./vendor/autoload.php";

use DesignPatterns\TP1\EnglishBookFactory;
use DesignPatterns\TP1\FrenchBookFactory;

$frBookFactory = new FrenchBookFactory();
$enBookFactory = new EnglishBookFactory();

$frFictionBook = $frBookFactory->createFictionBook("Le seigneur des anneaux", "J.R Tolkien");
$enFictionBook = $enBookFactory->createFictionBook("The Lord Of The Ring", "J.R Tolkien");
$frHistoryBook = $frBookFactory->createHistoryBook("Sapiens", "Un nom compliqué");
$enHistoryBook = $enBookFactory->createHistoryBook("Sapiens", "A complicated name");

echo "/// FRANÇAIS ///\n";
echo "- {$frFictionBook->getDetails()}".PHP_EOL;
echo "- {$frHistoryBook->getDetails()}".PHP_EOL;

echo "/// ANGLAIS ///\n";
echo "- {$enFictionBook->getDetails()}".PHP_EOL;
echo "- {$enHistoryBook->getDetails()}".PHP_EOL;
