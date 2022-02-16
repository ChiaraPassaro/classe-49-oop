<?php
require_once __DIR__ . "/User.php";
require_once __DIR__ . "/../traits/Position.php";

class Employee extends User
{
  use Position;
  protected $level;
  protected $salary;
  protected $role;
  protected $team;


  public function __construct($name, $lastName, $level)
  {
    parent::__construct($name, $lastName);
    // $this->level = $level;
    $this->setLevel($level);
  }

  /**
   * Get the value of level
   */
  public function getLevel()
  {
    return $this->level;
  }

  /**
   * Set the value of level
   *
   * @return  self
   */
  public function setLevel($level)
  {
    if (!is_int($level)) {
      throw new Exception('Is not a number');
    }
    $this->level = $level;

    return $this;
  }

  /**
   * Get the value of salary
   */
  public function getSalary()
  {
    return $this->salary;
  }

  /**
   * Set the value of salary
   *
   * @return  self
   */
  public function setSalary($salary)
  {
    $this->salary = $salary;

    return $this;
  }

  /**
   * Get the value of role
   */
  public function getRole()
  {
    return $this->role;
  }

  /**
   * Set the value of role
   *
   * @return  self
   */
  public function setRole(string $role)
  {
    $this->role = $role;

    return $this;
  }

  /**
   * Get the value of team
   */
  public function getTeam()
  {
    return $this->team;
  }

  /**
   * Set the value of team
   *
   * @return  self
   */
  public function setTeam($team)
  {
    $this->team = $team;

    return $this;
  }

  public function setSconto($eta)
  {
    if ($eta > 60) {
      // parent::setSconto($eta);
      $this->sconto = 50;
    } else {
      $this->sconto = $this->level * 10;
    }
  }
}
