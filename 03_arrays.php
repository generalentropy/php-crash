<?php

// simple array
$numbers = [1, 33, 10, 17, 300];
$fruits = array("apple", "orange", "banane");


// echo est une instruction, pas une expression retournable.
// => echo "<p>$x</p>" ne fonctionne pas
$display_fruits = fn ($x) => "<p>$x</p>";

foreach ($fruits as $fru) {

    echo  $display_fruits($fru);
};

// var_dump($numbers);

print_r($numbers);

echo "<p>$fruits[1]</p>";
$colors = [

    1 => "red",
    2 => "blue",
    6 => "green"
];

echo $colors[5]; // n'affiche rien
echo $colors[2]; // n'affiche rien

$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',

];

// pae besoin de quote ici
echo "<p>$hex[green]</p>";

echo "<p>$hex[red]</p>";

echo "<p>$hex[blue]</p>";


$person = ['first_name' => 'Eddy',
'last_name' => 'David',
'email' => "eddydavid@email.com"
];

// Bonne pratique
echo "<p>{$hex['green']}</p>";
echo "<p>{$person['first_name']}</p>" ;


$people = [
    [
        'first_name' => 'Eddy',
        'last_name' => 'David',
        'email' => 'eddydavid@email.com'
    ],
    [
        'first_name' => 'Anna',
        'last_name' => 'Martin',
        'email' => 'anna.martin@email.com'
    ],
    [
        'first_name' => 'Lucas',
        'last_name' => 'Dubois',
        'email' => 'lucas.dubois@email.com'
    ]
];



echo $people[1]['email'];


var_dump(json_encode($people));

$jsonf = json_encode($people);
$decoded = json_decode(($jsonf));

print_r($decoded);
