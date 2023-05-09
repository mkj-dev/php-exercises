<?php

class Person {
  private string $name;
  private string $city;

  public function __construct(string $name, string $city) {
    $this->name = $name;
    $this->city = $city;
  }
  
  public function getName(): string {
    return $this->name;
  }

  public function getCity(): string {
    return $this->city;
  }
}

$p1 = new Person("Adam Nowak", "Poznań");
$p2 = new Person("Jan Nowak", "Warszawa");

echo "Name: " . $p1->getName() . " City: " . $p1->getCity() . "</br>";
echo "Name: " . $p2->getName() . " City: " . $p2->getCity() . "</br>";
