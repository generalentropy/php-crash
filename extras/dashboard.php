<?php

session_start();



if (isset($_SESSION['username'])) {

    $user = $_SESSION['username'];
    echo '<h1>Welcome ' . ucwords($user) . '</h1>';
} else {
    echo '<h1>Welcome Guest</h1>';
    echo '<a href="/13_sessions.php">Home</a>';
}
