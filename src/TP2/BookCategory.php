<?php

namespace DesignPatterns\TP2;

class BookCategory implements BookComponent
{
    /** @var BookComponent[] */
    protected array $children = [];

    protected ?BookCategory $parent = null;

    public function __construct(protected string $title)
    {
    }

    public function setParent(BookCategory $parent)
    {
        $this->parent = $parent;
    }

    public function add(BookComponent $child)
    {
        if ($child instanceof BookCategory) {
            $child->setParent($this);
        }
        $this->children[$child->getIdentifier()] = $child;

        return $this;
    }

    public function getBookByTitle(string $title): Book
    {
        foreach ($this->children as $child) {
            if ($child instanceof Book && $child->getTitle() === $title) {
                return $child;
            }
            if ($child instanceof BookCategory) {
                return $child->getBookByTitle($title);
            }
        }
        return null;
    }

    public function getIdentifier(): string
    {
        if ($this->parent) {
            return $this->parent->getIdentifier().".".$this->title;
        }
        return $this->title;
    }

    public function showDetails(int $depth = 0): void
    {
        echo implode("", array_fill(0, $depth++, "\t"))."\e[1m{$this->title}\e[0m".PHP_EOL;
        foreach ($this->children as $child) {
            $child->showDetails($depth);
        }
    }
    
}
