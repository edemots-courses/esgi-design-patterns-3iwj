<?php

require_once "./vendor/autoload.php";

use DesignPatterns\TP1\BookBuilder;
use DesignPatterns\TP1\EnglishBookFactory;
use DesignPatterns\TP1\FrenchBookFactory;

/*
$frBookFactory = new FrenchBookFactory();
$enBookFactory = new EnglishBookFactory();

$frFictionBook = $frBookFactory->createFictionBook("Le seigneur des anneaux", "J.R Tolkien");
$enFictionBook = $enBookFactory->createFictionBook("The Lord Of The Ring", "J.R Tolkien");
$frHistoryBook = $frBookFactory->createHistoryBook("Sapiens", "Un nom compliqué");
$enHistoryBook = $enBookFactory->createHistoryBook("Sapiens", "A complicated name");
*/

$frFictionBook = (new BookBuilder())
    ->french()
    ->fictional()
    ->title("Le Seigneur Des Anneaux")
    ->author("J.R. Tolkien")
    ->isbn("1234567890")
    ->writtenAt("1999")
    ->build();
$enFictionBook = (new BookBuilder())
    ->english()
    ->fictional()
    ->title("The Lord Of The Ring")
    ->author("J.R. Tolkien")
    ->isbn("1234567899")
    ->writtenAt("1999")
    ->build();

$frHistoryBook = (new BookBuilder())
    ->french()
    ->historical()
    ->title("SAPIENS")
    ->author("Quelqu'un")
    ->isbn("0987654321")
    ->writtenAt("2010")
    ->build();
$enHistoryBook = (new BookBuilder())
    ->english()
    ->historical()
    ->title("SAPIENS")
    ->author("Someone")
    ->isbn("0987654322")
    ->writtenAt("2010")
    ->build();

echo "/// FRANÇAIS ///\n";
echo "- {$frFictionBook->getDetails()}".PHP_EOL;
echo "- {$frHistoryBook->getDetails()}".PHP_EOL;

echo "/// ANGLAIS ///\n";
echo "- {$enFictionBook->getDetails()}".PHP_EOL;
echo "- {$enHistoryBook->getDetails()}".PHP_EOL;
