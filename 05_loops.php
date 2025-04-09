<?php



// for ($x = 0; $x <= 80; $x++) {

//  echo "<p>Counter is : $x</p>";

// };

$x = 30;

// while ($x <= 15) {

//     echo 'Number' . $x  . '<br />';

//     $x++;

// };

// do {

//     echo 'Number ' . $x . '<br />';
//     $x++;

// } while ($x <= 10);


$posts = [
    'Premier article',
    'Deuxième article',
    'Troisième article',
    'Article bonus',
];

// foreach ($posts as $p) {

//     echo "<p>{$p}</p>";

// };


$person = [
'first_name' => 'Eddy',
'last_name' => 'David',
'email' => 'eddy@david.fr'
];


// foreach ($posts as $index => $post) {

//     echo $index . ' - ' . $post . '<br>';

// };


foreach ($person as $key => $value) {

    echo "$key - $value <br />";
};
