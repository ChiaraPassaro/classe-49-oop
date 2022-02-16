<?php
require_once __DIR__ . "/../traits/Position.php";
class Car
{
  use Position;
  public $model;
  public $brand;
  public $color;
  public $doors;
  public $enginCapacity;
  public $gearbox;
  public $fuel;
  public $hp;
  public $body;
  public $price;
  protected $options = [];
  public $optionals = [
    [
      'name' => 'cruiseControl',
      'price' => 400,
    ],
    [
      'name' => 'sensors',
      'price' => 500,
    ],
    [
      'name' => 'navigator',
      'price' => 250,
    ],
    [
      'name' => 'cam',
      'price' => 600,
    ],
  ];

  /**
   * Undocumented function
   *
   * @param  string $brand
   * @param  string $model
   * @param  float  $price
   */
  public function __construct(string $brand, string $model, float $price)
  {
    $this->brand = $brand;
    $this->model = $model;
    $this->price = $price;
  }

  public function setModel($model)
  {
    $this->model = $model;
  }
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  public function setColor($color)
  {
    $this->color = $color;
  }
  public function setDoors($doors)
  {
    $this->doors = $doors;
  }
  public function setEnginCapacity($enginCapacity)
  {
    $this->enginCapacity = $enginCapacity;
  }
  public function setGearBox($gearBox)
  {
    $this->gearBox = $gearBox;
  }
  public function setFuel($fuel)
  {
    $this->fuel = $fuel;
  }
  public function setHp($hp)
  {
    $this->hp = $hp;
  }
  public function setBody($body)
  {
    $this->body = $body;
  }
  public function setOptions($options)
  {

    if (is_array($options)) {
      foreach ($options as $option) {
        foreach ($this->optionals as $optionalsValue) {
          if ($optionalsValue['name'] === $option) {
            $this->options[] = $optionalsValue;
          }
        }
      }
    }
  }

  /**
   * Undocumented function
   *
   * @return string
   */
  public function getModel(): string
  {
    return $this->model;
  }
  public function getBrand()
  {
    return $this->brand;
  }
  public function getColor()
  {
    return $this->color;
  }
  public function getDoors()
  {
    return $this->doors;
  }
  public function getEnginCapacity()
  {
    return $this->enginCapacity;
  }
  public function getGearBox()
  {
    return $this->gearBox;
  }
  public function getFuel()
  {
    return $this->fuel;
  }
  public function getHp()
  {
    return $this->hp;
  }
  public function getBody()
  {
    return $this->body;
  }
  public function getOptions()
  {
    return $this->options;
  }
  public function getPrice()
  {
    return $this->price;
  }
}


$auto = new Car('Fiat', 'Punto', 8000);
$auto->setOptions(['pippo', 'cruiseControl', 'navigator']);

//prendo il prezzo base
//aggiungo options se ci sono
// stampo prezzo finale
$optionsPrice = 0;
if (count($auto->getOptions()) > 0) {
  foreach ($auto->getOptions() as $option) {
    $optionsPrice += $option['price'];
  }
}
var_dump($optionsPrice);
$finalPrice = $optionsPrice + $auto->getPrice();

var_dump($finalPrice);

// var_dump($auto->getOptions());
