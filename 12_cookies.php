<?php

/* ------------------ Cookies ------------------ */


// Set cookies

setcookie('name', 'Eddy', time() + 86400 * 30);

// $_COOKIE est un tableau associatif
$name = $_COOKIE['name'];



// setcookie('name', '', time() - 86400)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php if (isset($_COOKIE['name'])) {

    echo 'Hello' . ' ' . $name;
} ?>



</body>
</html>
