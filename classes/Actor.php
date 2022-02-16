<?php

class Actor
{
  protected $name;
  protected $lastname;
  protected $birthday;

  public function __construct($name, $lastname)
  {
    $this->name = $name;
    $this->lastname = $lastname;
  }



  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of lastname
   */
  public function getLastname()
  {
    return $this->lastname;
  }

  /**
   * Set the value of lastname
   *
   * @return  self
   */
  public function setLastname($lastname)
  {
    $this->lastname = $lastname;

    return $this;
  }

  /**
   * Get the value of birthday
   */
  public function getBirthday()
  {
    return $this->birthday;
  }

  /**
   * Set the value of birthday
   *
   * @return  self
   */
  public function setBirthday($birthday)
  {
    $this->birthday = $birthday;

    return $this;
  }
}
