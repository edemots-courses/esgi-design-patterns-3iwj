<?php

namespace DesignPatterns\TP2;

use Exception;
use Throwable;

abstract class Librarian
{
    protected static BookCategory $booksByCategory;

    public static function getBooksByCategory()
    {
        if (isset(self::$booksByCategory)) {
            return self::$booksByCategory;
        }

        $frFictionBook = (new BookBuilder())
            ->french()
            ->fictional()
            ->title("Le Seigneur Des Anneaux")
            ->author("J.R. Tolkien")
            ->isbn("1234567890")
            ->writtenAt("1999")
            ->priceInCents(1999)
            ->pegi15()
            ->build();
        $harryPotterFr = (new BookBuilder())
            ->french()
            ->fictional()
            ->title("Harry Potter et la coupe de feu")
            ->author("J.K. Rowling")
            ->isbn("135792468")
            ->writtenAt("2002")
            ->priceInCents(2499)
            ->pegi7()
            ->build();
        $enFictionBook = (new BookBuilder())
            ->english()
            ->fictional()
            ->title("The Lord Of The Ring")
            ->author("J.R. Tolkien")
            ->isbn("1234567899")
            ->writtenAt("1999")
            ->priceInCents(1999)
            ->pegi15()
            ->build();

        $frHistoryBook = (new BookBuilder())
            ->french()
            ->historical()
            ->title("SAPIENS")
            ->author("Quelqu'un")
            ->isbn("0987654321")
            ->writtenAt("2010")
            ->priceInCents(1499)
            ->pegi18()
            ->build();
        $enHistoryBook = (new BookBuilder())
            ->english()
            ->historical()
            ->title("SAPIENS")
            ->author("Someone")
            ->isbn("0987654322")
            ->writtenAt("2010")
            ->priceInCents(1599)
            ->pegi18()
            ->build();

        $root = new BookCategory("Livres");
        $root->add(
            (new BookCategory("Science-fiction"))
                ->add(
                    (new BookCategory("Français"))
                        ->add($frFictionBook)
                        ->add($harryPotterFr)
                )
                ->add(
                    (new BookCategory("Anglais"))
                        ->add($enFictionBook)
                )
        )->add(
            (new BookCategory("Histoire"))
                ->add(
                    (new BookCategory("Français"))
                        ->add($frHistoryBook)
                )
                ->add(
                    (new BookCategory("Anglais"))
                        ->add($enHistoryBook)
                )
        );

        self::$booksByCategory = $root;

        return self::$booksByCategory;
    }

    public static function getBook(string $title, int $age, bool $eligibleToDiscount = false)
    {
        $book = self::getBooksByCategory()->getBookByTitle($title);

        if ($book) {
            $library = new Library();
            $proxy = new PegiProxy($library);

            $book = $proxy->readBook($book, $age);

            if ($eligibleToDiscount) {
                return new DiscountedBook($book);
            }
            return $book;
        }
        throw new  Exception("Sorry I cannot find {$title}.");
    }
}
