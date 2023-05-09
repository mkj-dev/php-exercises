<?php
declare(strict_types=1);
/* 
  Exercise 1
  Prepare a showName function that displays the name passed to it as an argument.
*/
echo "<h2>Function arguments</h2>";
function showName($name = 'Nameless') {
  if (is_string($name)) {
    echo "<h3 class='valid'>My name is {$name}.</h3>";
  } else {
    echo "<h3 class='error'>Error! The name should be of string type.</h3>";
  }
}

// showName(10); // Error
showName('Mkj'); // OK

/* Exercise 1.1
  Write a prepareCart function that checks if a customer can place an order at $price when their account balance is $money.
  Declare the appropriate types for the arguments.
  The third argument to $promotion should be a boolean (true or false).
  The default value if not provided should be false.
  If the promotion is to be valid (true) from the total price of the order ($price), subtract 10.
  If the customer can place the order, display the OK message.
*/
function prepareCart(float $price = 35.0, float $money = 120.0, bool $promotion = false) {
  if ($promotion) {
    $price -= 10;
  } 
  if ($money >= $price) {
    $money -= $price;
    echo "<h3 class='valid'>OK! You can buy this item!</h3>";
    echo "<p>You have {$money} PLN left in your wallet.</p>";
  } else {
    echo "<h3 class='error'>Insufficient funds in the wallet</h3>";
  }
}
prepareCart();

/* Exercise 2
  Create an isAdult function that returns true if the age given by the argument is an adult, or false if not.
*/
echo "<h2>Returning data</h2>";

function isAdult(int $age): bool {
  if ($age >= 18) {
    return true;
  } else {
    return false;
  }
}

echo "Are you an adult?: ";
var_dump(isAdult(30));

/* Exercise 2.1
  Prepare a rectangleArea function that calculates the area of a rectangle with sides $sideA and $sideB given by the arguments.
  Return calculated area from function and display.
  Assign the appropriate types for the arguments and the return value, assuming that we will only operate with integers.
*/
$sideA = 12;
$sideB = 5;

function rectangleArea(int $sideA, int $sideB): int {
  return $sideA * $sideB;
}

echo "<h3>Rectangle area: " . rectangleArea($sideA, $sideB) . "</h3>";