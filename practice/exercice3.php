<?php

//  ------------------------------------ Exercice 3 ------------------------------------

$prenoms = ['Alice', 'Bob', 'Charlie', 'Diane'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

foreach ($prenoms as $user) {
    echo "<p class='salutation'>Bonjour $user !</p>";

}
?>  
</body>
</html>