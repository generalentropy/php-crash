<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to  // Value + type
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/


$age = 20;

// if ($age >= 40) {
//     echo 'yes' ;
// } else {
//     echo 'no';
// };


// $t = date('d/m/Y');

$t = date('H');

// print_r($t);

if ($t < 12) {
    echo 'Good morning';
} elseif ($t < 17) {
    echo 'Good afternoon';
} else {
    echo 'Good evening';
};

echo "<br />";

$posts = ['First Blog Post'];

// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No posts';
// }


echo !empty($posts) ? $posts[0] : 'Sorry No posts at this moment';

// $firstPost =  !empty($posts) ? $posts[0] : 'Sorry No posts at this moment';

$firstPost =  $posts[0] ?? null;

echo "<br />";

echo $firstPost;


$favcolor  = 'blue';

switch ($favcolor) {

    case 'red':
        echo 'Your favorite color is red';
        break;

    case 'green':
        echo 'Your favorite color is green';
        break;

    case 'blue':
        echo 'Your favorite color is blue';
        break;

    default: echo 'Your favorite color is unknown';
};
