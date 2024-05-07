<?php
class Book{
  // public $title = "PHP for Beginner";
  // public $price = 5.5;
  // public $qty = 18;
  // public $publisher = 'Gramedia';

  //property
  public $title;
  public $price;
  public $qty;
  public $publisher;

  //method
  public function orderBook()
  {
    return $this->title . ' oredered...';
  }

  public function __construct($title, $price, $qty, $publisher)
  {
    $this->title = $title;
    $this->price = $price;
    $this->qty = $qty;
    $this->publisher = $publisher;
  }
}

// membuat objek (instansiasi objek)
$book_one = new Book('PHP for Beginner', 5.5 , 18, 'Gramedia');

//mengakses properti objek
echo "Book 1";
echo '<br>';
echo $book_one->title;
echo '<br>';
echo $book_one->price;
echo '<br>';
echo $book_one->qty;
echo '<br>';
echo $book_one->publisher;
echo '<br>';
echo $book_one->orderBook();

//membuat objek baru
$book_two = new Book('Java for Beginner', 6.5, 20, 'Elex Media');

//mengakses properti objek
echo '<br><br>';
echo "Book 2";
echo '<br>';
echo $book_two->title;
echo '<br>';
echo $book_two->price;
echo '<br>';
echo $book_two->qty;
echo '<br>';
echo $book_two->publisher;
echo '<br>';
echo $book_two->orderBook();