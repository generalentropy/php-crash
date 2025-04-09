<?php

//  ------------------------------------ Exercice 1 ------------------------------------

$nom = "Eddy";
$age = 39;
$estEtudiant = true;

echo 'Bonjour, je m\'appelle ' . $nom . ', j\'ai ' . $age . ' ans ' . ($estEtudiant ? 'et je suis étudiant.' : '');


function estMajeur($age)
{

    return $age >= 18;
}

echo "<br />";

echo 'Est majeur : ' ;
if (estMajeur($age)) {
    echo "Vrai";
} else {
    echo "Faux";
}

for ($i = 1; $i <= 10; $i++) {

    echo $i . "<br>";
};

$n = 1;

while ($n < 11) {

    echo $n . "<br>";
    $n++;
}
