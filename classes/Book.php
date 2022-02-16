<?php

class Book
{
  public $title;
  public $author;
  public $editor;
  public $cover;
  public $genres;
  public $pages;
  public $price;
  public $isbn;
  public $sale = 0;

  public function __construct($title, $author, $isbn)
  {
    $this->title = $title;
    $this->author = $author;
    $this->isbn = $isbn;
  }

  public function getTitle()
  {
    return $this->title;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getEditor()
  {
    return $this->editor;
  }
  public function setEditor($editor)
  {
    $this->editor = $editor;
  }

  public function getCover()
  {
    return $this->cover;
  }
  public function setCover($cover)
  {
    $this->cover = $cover;
  }

  public function getGenres()
  {
    return $this->genres;
  }
  public function setGenres($genres)
  {
    if (is_array($genres)) {
      $this->genres = $genres;
    }
    die('non e un array');
  }

  public function getPages()
  {
    return $this->pages;
  }
  public function setPages($pages)
  {
    $this->pages = $pages;
  }

  public function getPrice()
  {
    return $this->price;
  }
  public function setPrice($price)
  {
    $this->price = $price;
  }

  public function getIsbn()
  {
    return $this->isbn;
  }
  public function setIsbn($isbn)
  {
    $this->isbn = $isbn;
  }

  public function setSale($sale)
  {
    $this->sale = $sale;
  }

  public function getFinalPrice()
  {
    return $this->price - $this->price * $this->sale;
  }
}

$book = new Book('Promessi Sposi', 'Alessandro Manzoni', '99809896626272');
$book->setPrice(20.40);
$book->setSale(0.30);
echo $book->getFinalPrice();

// var_dump($book);
