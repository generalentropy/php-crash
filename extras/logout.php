<?php


session_start();

session_destroy();

// pas despace avant les deux-points (:), rend l'en-tête HTTP invalide.
header('Location: /13_sessions.php');
