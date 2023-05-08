<?php
/* Exercise 1
  Prepare a script that checks whether the person whose age is 
  specified in the $age variable is an adult. If so, display Adult!.
*/
echo "<h2>If/else/elseif<h2>";
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

/* Exercise 3
  Divide the $people into teams of 4.
  - If the number of people is enough, display the message: Teams: [number of teams].
  - If only one person is left without a team, just display Too Few People!.
  - In a situation where there is not enough room for more people, 
    write out: Missing: [number of people missing from a full team]. Use elseif. 
  Hint: remember the modulo operator.
*/
$people = 16;
// $people = 14;
// $people = 13;
$modulo = $people % 4;
if ($modulo === 0) {
  echo "<h3>Teams: " . $people / 4;
} elseif ($modulo > 1) {
  echo "<h3>Missing: " . 4 - $modulo . "</h3>";
} else {
  echo "<h3>Too few people!</h3>";
}

/* Exercise 4
  Prepare a simple switch calculator.
  Perform the operation specified in the variable $operation (+, -, *, /) on the numbers $number1 and $number2 and display the result.
  If none of the specified actions are selected, display "Invalid operation".
*/
$operation = "-";
$number1 = 4;
$number2 = 9;
echo "<h2>Switch/Match</h2>";
switch ($operation):
  case "+":
    echo "<h3>" . $number1 + $number2 . "</h3>";
    break;
  case "-":
    echo "<h3>" . $number1 - $number2 . "</h3>";
    break;
  case "*":
    echo "<h3>" . $number1 * $number2 . "</h3>";
    break;
  case "/":
    echo "<h3>" . $number1 / $number2 . "</h3>";
    break;
  default:
    echo "<h3>Invalid operation</h3>";
endswitch;

/* Exercise 4.1
  Rewrite the calculator in exercise 4 to use match instead of switch (PHP >= 8.0).
*/
$operation2 = "*";
echo match ($operation2) {
    "+" => "<h3>" . $number1 + $number2 . "</h3>",
    "-" => "<h3>" . $number1 - $number2 . "</h3>",
    "*" => "<h3>" . $number1 * $number2 . "</h3>",
    "/" => "<h3>" . $number1 / $number2 . "</h3>",
    default => "<h3>Invalid operation</h3>"
};