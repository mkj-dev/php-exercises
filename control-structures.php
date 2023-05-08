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
echo "<h2>Switch/Match</h2>";

$operation = "-";
$number1 = 4;
$number2 = 9;

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

/* Exercise 5
  Given the number 50. Decrease it by 8 and print the reduced value,
  but only until the number is greater than 0. Use a for loop.
*/
echo "<h2>For Loops</h2>";

for ($number50 = 50; $number50 > 0; $number50 -= 8) {
  echo "<h3 style='display:inline'>" . $number50 . " " . "</h3>";
}
echo "</br>";
/* Exercise 5.1
  Using one for loop, calculate the sum of all even numbers from 0 to 100 and display it on the screen.
  Also, count the number of even numbers greater than 50.
*/
$sum = 0;
$greaterThan50Count = 0;

for ($num = 0; $num <= 100; $num++) {
  if ($num % 2 === 0) {
    $sum += $num;
  }
  if ($num % 2 === 0 && $num > 50) {
    $greaterThan50Count += 1;
  }
}

echo "<h3>Sum of all even numbers from 0 to 100: " . $sum . "</h3>";
echo "<h3>Number of even numbers greater than 50: " . $greaterThan50Count . "</h3>";

/* Exercise 5.2
  (Harder) Do the multiplication table in the form of a simple table.
*/
for ($row = 1; $row <= 10; $row++) {
  for ($column = 1; $column <= 10; $column++) {
      echo $row * $column . ' | ';
  }
  echo '<br>';
}

/* Exercise 6
  Change Exercise 1 from the previous lesson to use a while loop:
  "The number is 50. Decrease it by 8 and print the reduced value, but only until the number is greater than 0."
*/
echo "<h2>While Loop</h2>";

$num50 = 50;

while ($num50 > 0) {
  echo "<h3 style='display:inline'>" . $num50 . " " . "</h3>";
  $num50 -= 8;
}

/* Exercise 7 
  Using one do-while loop, print out all the odd numbers in the ranges 20-40 and 60-80.
*/
echo "<h2>Do-while Loop</h2>";

$array20_40 = range(20, 40);
$array60_80 = range(60, 80);
$array_length = count($array20_40); // Both arrays are the same length

do {
  for ($i = 0; $i < $array_length; $i++) {
    if ($array20_40[$i] % 2 !== 0) {
      echo $array20_40[$i] . " ";
    }
  }
  echo "</br>";
  for ($i = 0; $i < $array_length; $i++) {
    if ($array60_80[$i] % 2 !== 0) {
      echo $array60_80[$i] . " ";
    }    
  }
} while ($i < $array_length);

/* Exercise 8
  The $people array contains the data of three students: name and year of birth.
  List the names of all students and their combined ages. Use a foreach loop.
  Attention! Age, i.e. how old they are now. This information is not in the array, it must be calculated.
*/
echo "<h2>Foreach loop</h2>";

$currentYear = 2023;
$combinedAges = 0;
$people = [
    ['name' => 'Jan Kowalski', 'birth' => 1980],
    ['name' => 'Piotr Nowak', 'birth' => 1994],
    ['name' => 'Anna Kowalczyk', 'birth' => 1982]
];

foreach ($people as $person) {
  $combinedAges += $currentYear - $person['birth'];
  echo $person['name'] . " " . ($currentYear - $person['birth']);
  echo "</br>";
}
echo "<h3>Combined ages: " . $combinedAges . "</h3>";

/* Exercise 9
  Using any loop and continue, prepare a script that sums the value of odd numbers from 1 to 20.
*/
echo "<h2>Loop Control</h2>";

$oddNumSum = 0;

for ($i = 1; $i <= 20; $i++) {
  if ($i % 2 === 0) {
    continue;
  }
  $oddNumSum += $i;
  echo $i . " ";
}
echo "</br><h3>Odd numbers sum: " . $oddNumSum . "</h3>";

/* Exercise 9.1
  Using a foreach loop, get the usernames from the $users array.
  When Marek appears, stop the loop.
*/
$users = ['Jan', 'Jakub', 'Marek', 'Piotr'];

foreach ($users as $user) {
  if ($user === 'Marek') {
    break;
  }
  echo $user . " ";
}