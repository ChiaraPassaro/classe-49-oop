<?php
trait Position
{
  protected $lat;
  protected $lon;

  public function setLat($lat)
  {
    $this->lat = $lat;
  }
  public function setLon($lon)
  {
    $this->lon = $lon;
  }

  public function getAddress()
  {
    return $this->lat . ' ' . $this->lon;
  }
}
