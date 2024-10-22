<?php

// build a 'Book' class with the properties: title, author, year, pages.
// create a function that displays the properties in the format: ....
class Book
{
    public string $title;
    public string $author;
    public $year;
    public $pages;
    public function __construct($title, $author, $year, $pages)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->pages = $pages;
    }

    public function showBook()
    {
        echo "{$this->author}, '{$this->title}', no. of pages: {$this->pages}, year of publication: {$this->year}.";
    }

}

$book = new Book("The Devil and Sherlock Holmes", 'David Grann', 2011, 223);
$book1 = new Book('Little Weirds', 'Jenny Slate', 2020, 173);
$book2 = new Book("The Great Gatsby", 'F. Scott Fitzgerald', 1925, 180);