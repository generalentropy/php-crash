<?php
// echo - Output strings, numbers, html, ect.
echo "Hello world 🎉";

echo [1,2,3];

// print -  Works like echo, but can only take in a single argument
print 123;
print "Eddy";


// print_r() - Print single values and arrays
print_r([1,2,3]);

// var_dump() - Returns more info like data type and length
// var_dump("hello");
var_dump(true);

// var_export() - Similar to var_dump(). Outputs a string representation of a variable (print the quotes)
var_export('hello')


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Post one"; ?></h1>
</body>
</html>