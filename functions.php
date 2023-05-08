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