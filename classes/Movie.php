<?php
require_once __DIR__ . "/Genre.php";
require_once __DIR__ . "/Actor.php";

class Movie
{
  protected $id;
  protected $title; //
  protected $director; //
  protected $year; //
  protected $language; //
  protected $rental; //
  protected $plot;
  protected $length;
  protected $cast = [];
  protected $genres = [];
  protected $rating;

  public function __construct($title, $director, $year, $language, $rental = false)
  {
    $this->title = $title;
    $this->director = $director;
    $this->year = $year;
    $this->language = $language;
    $this->rental = $rental;
  }

  /**
   * Get the value of title
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Set the value of title
   *
   * @return  self
   */
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  /**
   * Get the value of director
   */
  public function getDirector()
  {
    return $this->director;
  }

  /**
   * Set the value of director
   *
   * @return  self
   */
  public function setDirector($director)
  {
    $this->director = $director;

    return $this;
  }

  /**
   * Get the value of year
   */
  public function getYear()
  {
    return $this->year;
  }

  /**
   * Set the value of year
   *
   * @return  self
   */
  public function setYear($year)
  {
    $this->year = $year;

    return $this;
  }

  /**
   * Get the value of language
   */
  public function getLanguage()
  {
    return $this->language;
  }

  /**
   * Set the value of language
   *
   * @return  self
   */
  public function setLanguage($language)
  {
    $this->language = $language;

    return $this;
  }

  /**
   * Get the value of rental
   */
  public function getRental()
  {
    return $this->rental;
  }

  /**
   * Set the value of rental
   *
   * @return  self
   */
  public function setRental(bool $rental)
  {
    $this->rental = $rental;

    return $this;
  }

  /**
   * Get the value of plot
   */
  public function getPlot()
  {
    return $this->plot;
  }

  /**
   * Set the value of plot
   *
   * @return  self
   */
  public function setPlot(string $plot)
  {
    $this->plot = $plot;

    return $this;
  }

  /**
   * Get the value of length
   */
  public function getLength()
  {
    return $this->length;
  }

  /**
   * Set the value of length
   *
   * @return  self
   */
  public function setLength($length)
  {
    $this->length = $length;

    return $this;
  }

  /**
   * Get the value of cast
   */
  public function getCast()
  {
    return $this->cast;
  }

  /**
   * Set the value of cast
   *
   * @return  self
   */
  public function setCast(array $arrayCast)
  {

    foreach ($arrayCast as $actor) {
      try {
        $this->cast[] = $this->checkActor($actor);
      } catch (TypeError $e) {
        throw new Exception($e->getMessage());
      }
    }
    return $this;
  }

  private function checkActor(Actor $actor)
  {
    return $actor;
  }


  /**
   * Get the value of genres
   */
  public function getGenres()
  {
    return $this->genres;
  }

  /**
   * Set the value of genres
   *
   * @return  self
   */
  public function setGenres(array $genres)
  {
    foreach ($genres as $genre) {
      if (!is_object($genre)) {
        throw new Exception('Non mi hai passato un oggetto');
      }
      if (get_class($genre) === 'Genre' && !in_array($genre, $this->genres)) {
        $this->genres[] = $genre;
      }
    }
    return $this;
  }

  /**
   * Get the value of rating
   */
  public function getRating()
  {
    return $this->rating;
  }

  /**
   * Set the value of rating
   *
   * @return  self
   */
  public function setRating($rating)
  {
    $this->rating = $rating;

    return $this;
  }
}
