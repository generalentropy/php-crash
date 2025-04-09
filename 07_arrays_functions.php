<?php

require_once __DIR__ . '/data/dummy.php';


// Get length
echo count($fruits);

// Search
var_dump(in_array('pomme', $fruits));


// Add to array
$fruits[] = 'poire';


array_push($fruits, 'ananas', 'raisin');


echo '<pre>';
print_r($fruits);
echo '</pre>';

array_unshift($fruits, 'mangue');

echo '<pre>';
print_r($fruits);
echo '</pre>';


// remove
array_pop($fruits);
array_shift($fruits);
// unset($fruits[2]);



//split into 2 chunks
// $chunked_array = array_chunk($fruits, 3);

echo '<pre>';
print_r($fruits);
echo '</pre>';


echo '<pre>';
print_r($chunked_array);
echo '</pre>';


$arr4 = array_merge($arr1, $arr2);


print_r($arr4);


$arr5 = [...$arr1, ...$arr2];


echo '<pre>';
print_r($arr5);
echo '</pre>';


$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

print_r($c);

// crée un array de keys
$keys = array_keys($c);

print_r($keys);


$flipped = array_flip($c);
print_r($flipped);


$numbers = range(1, 30);

print_r($numbers);

$newNumbers = array_map(function ($number) {

    return "Number $number";
}, $numbers);


print_r($newNumbers);


$filteredNumbers = array_filter($numbers, fn ($number) => $number > 20);


print_r($filteredNumbers);


$sum = array_reduce($numbers, fn ($acc, $num) => $acc + $num, 0);


// var_dump($sum);

echo '<pre>';
var_dump($sum);
echo '</pre>';
