<?php

//  ------------------------------------ Exercice 2 ------------------------------------


$user = ['nom' => 'Dupont',
'email' => 'dupont@example.com',
'age' => 28
];


?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
<?php

/*
En PHP, quand tu accèdes à une clé associative dans une chaîne double-quote ("..."), il est préférable de mettre les clés entre accolades et avec des guillemets pour éviter les erreurs (surtout si le nom de la clé est ambigu, ou contient des caractères spéciaux comme -, ou un espace).
*/

echo "<ul>
  <li>Nom : {$user['nom']}</li>
  <li>Email : {$user['email']}</li>
  <li>Âge : {$user['age']}</li>
</ul>";


?>

 </body>
 </html>