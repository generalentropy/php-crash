<?php

require 'utils/config.php';

// error_reporting(E_ALL) → on veut voir toutes les erreurs (warnings, notices, fatales, etc.)
// ini_set('display_errors', 1) → on demande à PHP de les afficher dans le navigateur

// PROD
// ini_set('display_errors', 0); // ne rien afficher à l'utilisateur
// ini_set('log_errors', 1);     // activer le log
// ini_set('error_log', '/chemin/vers/mon_log.log');


$y = 99;

function registerUser()
{

    global $y;
    echo $y . ' - ';
    $x = 10;
    echo 'User registered<br />';
    return $x;
};

registerUser();

function showUser($user)
{

    echo ' User : ' . $user;

};


// => no parameter trigger error
showUser('Eddy');


function sum($n1 = 10, $n2 = 10)
{

    return $n1 + $n2;
};

echo '<br />';

$s = sum(33, 11);

echo $s;


echo sum();

$substract = function ($v1, $v2) {

    return $v1 - $v2;
};

echo '<br />';

echo $substract(10, 5);

$multiply = fn ($n1, $n2) => $n1 * $n2;

echo '<br />';

echo $multiply(10, 10);
