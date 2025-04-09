<?php


/* ----- Variables & Data Types  ----- */

/* --------- PHP Data Types --------- */


/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value

- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = "Eddy"; // string
$age = 39; // int
$has_kids = true; // Bool
$cash_on_hand = 20.75; // float

echo $has_kids; // if true -> 1
// var_dump($has_kids); // bool(false)
// var_dump($cash_on_hand);

echo "<br />";

// single quote don't parse the variable (use concat)
echo $name . ' is ' . $age . ' years old ';

echo "<br />";

// just use double quotes
// Using ${} in strings is deprecated
// echo "${name} is ${age} years old";

echo "$name is $age years old";

echo "5" + "5";

echo '5' + '5'; // 10 ≠ JS

$x =  '5' + '5';

var_dump($x);

echo 10 % 3;
echo 10 / 1;
echo 5 * 6;
echo  10 - 2;


// create a constant
// All uppercase convention
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');


echo HOST

?>

