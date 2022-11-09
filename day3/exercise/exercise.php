<!-- http://localhost/php-exercises/day3/exercise/exercise.php -->

<?php
// Exercise 1
// Create a for loop which will print your name 50 times on the screen. Do the same with while and do while loop. 
echo "<p>exercise 1</P>";
$name = "Kaho Nozue";
for ($i = 0; $i < 50; $i++) {
    echo "$name, ";
}

echo "<p></p>";

$a = 0;
while ($a <= 50) {
    echo "$name, ";
    $a++;
}

echo "<p></p>";

$a = 0;
do {
    echo "$name, ";
    $a++;
} while ($a <= 10);

echo "<br>";

// Exercise 2
// Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element.
echo "<p>exercise 2</p>";
$numeric_array = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "four" => 4,
    "five" => 5,
    "six" => 6,
    "seven" => 7,
    "eight" => 8,
    "nine" => 9,
    "ten" => 10,
);

foreach ($numeric_array as $number => $value) {
    echo $value;
}

echo "<br>";

// Exercise 3
// Create a function that will have a parameter. The argument given to that parameter should be an array. The function should return the highest value from the array. Try to create an array with at least 10 numbers created randomly. You may want to take a look at the rand() function from PHP.
echo "<p>exercise 3</p>";

// create an array with 10 numbers created randomly
$random_numbers_array = [];
for ($i = 0; $i < 10; $i++) {
    array_push($random_numbers_array, rand(0, 10));;
}
echo "numbers that randamly generated: " . implode(",", $random_numbers_array) . " ";

echo "<br>";

echo "max number: ";
get_highesst_value($random_numbers_array);

// a function that will have a parameter
function get_highesst_value($numbers_array)
{
    echo max($numbers_array);
}

echo "<br>";

// Exercise 4
// Create a PHP program that iterates the integers from 1 to 100. For multiples of three print "Back-End" instead of the number and for the multiples of five print "Front-End". For numbers that are multiples of both three and five print "Full-Stack".
// e.g. 
// 1
// 2
// Back-End
// 4
// Front-End
// Back-End
// 7
// 8
// Back-End
// Front-End
// 11
// Back-End
// 13
// 14
// Full-Stack
// 16
// 17
// Back-End
// 19
// Front-End
// etc.
echo "<p>exercise 4</p>";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "Full-Stack<br>";
    } else if ($i % 3 == 0) {
        echo "Back-End<br>";
    } else if ($i % 5 == 0) {
        echo "Front-End<br>";
    } else {
        echo "$i<br>";
    }
}
