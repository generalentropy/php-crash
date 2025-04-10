<?php

/* ---------- File Handling --------- */

/*
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

echo 'File handling is the ability to read and write files on the server. <br />
  PHP has built in functions for reading and writing files.';


$file = 'extras/users.txt';


if (file_exists($file)) {

    // echo readfile(($file));

    $handle = fopen($file, 'r');
    $content = fread($handle, filesize($file));
    fclose($handle);

    echo '<pre>';
    echo $content;
    echo '</pre>';
} else {

    $handle = fopen($file, 'w');
    $content = 'Brad' . PHP_EOL . 'Sarah'  . PHP_EOL . 'Eddy'  . PHP_EOL . 'Yann'  . PHP_EOL;
    fwrite($handle, $content);
    fclose($handle);

    echo '<pre>';
    echo $content;
    echo '</pre>';

}
