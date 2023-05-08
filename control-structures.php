<?php
/* Exercise 1
  Prepare a script that checks whether the person whose age is 
  specified in the $age variable is an adult. If so, display Adult!.
*/
// $age = 16;
$age = 28;
if ($age >= 18) {
  echo "<h3>Adult!</h3>";
} else {
  echo "<h3>Not adult!</h3>";
}

/* Exercise 2
  Calculate the area of a square with side length $side, and if it 
  equals 25, print Area: [calculated area] on the screen.
*/
// $side = 4;
$side = 5;
$area = $side ** 2;
if ($area === 25) {
  echo "<h3>Area: {$area}</h3>";
} else {
  echo "Area is not equal to 25";
}