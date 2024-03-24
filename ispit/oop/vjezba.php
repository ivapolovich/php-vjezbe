<?php

class Book {
    private $naslov;
    private $autor;
    private $isbn;
    private $available;

    public function __construct($naslov, $autor, $isbn)
    {
        $this->naslov = $naslov;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->available = true;
    }

    public function borrowBook()
    {
        if($this->available)
        {
         $this->available = false;
         return true;
        } else {
            return false;
        }
    }

    public function returnBook()
    {
        $this->available = true;
    }

    public function getInfo()
    {
        return "Naslov " . $this->naslov . ", Autor: " . $this-> autor . ", ISBN: " . $this->isbn . "Dostupnost:" . ($this->available ? 'DA' : 'NE');

    }

}

class Library{
    private $books = array();

    public function addBook($book)
    {
        $this->books[] = $book;
    }

    public function displayAllBooks()
    {
        echo "Popis knjiga u knjižnici: \n";
        foreach ($this->books as $book)
        {
            echo $book->getInfo() . "\n";
        }
    }

    public function borrowBook($isbn) {
        foreach ($this->books as $book) {
            if ($book->getIsbn() == $isbn && $book->isAvailable()) {
                $book->borrowBook();
                echo "Knjiga '" . $book->getTitle() . "' je uspješno posuđena.\n";
                return;
            }
        }
        echo "Knjiga s ISBN-om '$isbn' nije dostupna za posudbu ili ne postoji.\n";
    }

    public function returnBook($isbn) {
        foreach ($this->books as $book) {
            if ($book->getIsbn() == $isbn && !$book->isAvailable()) {
                $book->returnBook();
                echo "Knjiga '" . $book->getTitle() . "' je uspješno vraćena.\n";
                return;
            }
        }
        echo "Knjiga s ISBN-om '$isbn' nije posuđena ili ne postoji.\n";   
    }
}

$knjiga = new Book("marko Maric", "Vlak u snijegu", "5554688");
$knjiznica = new Library();

echo $knjiga->getInfo();
echo $knjiznica->displayAllBooks();

?>