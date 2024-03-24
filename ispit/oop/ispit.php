<?php

class Book
{
   private string $title;
   private string $author;
   private mixed $isbn;
   private bool $available;

    public function __construct($title, $author, $isbn)
    {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->available = true;
    }

    public function borrow()
    {
        if($this->available)
        {
            $this->available = false;
            return true;
        } else {
            return false;
        }
           
    }

    public function returnBook() {
        $this->available = true;
    }

    public function getInfo() {
        return "Naslov: " . $this->title . ", Autor: " . $this->author . ", ISBN: " . $this->isbn;
    }
}

$posudba = new Book('Knjiga1', 'John Doe', 'GBS132558');
echo $posudba-> borrow();
echo $posudba-> getInfo();


?>