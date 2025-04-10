<?php

/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/


// echo $_GET['name'];
// echo $_GET['age'];


if (isset($_POST['submit'])) {
    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ;
    // $age = htmlspecialchars($_POST['age']);

    // Récupère directement une valeur d'une superglobale ($_POST, $_GET, etc.) de façon sécurisée.
    // Plus propre et recommandé pour récupérer et filtrer en une seule étape.
    // Ne fonctionne que sur des données venant d'une requête HTTP (POST, GET, COOKIE...).
    // Retourne false si la clé n'existe pas.
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS) ;


    // Sert à filtrer une valeur déjà récupérée (ex: $_POST['name']).
    // Plus générique, tu peux l’utiliser sur n’importe quelle variable (pas forcément une superglobale).
    // ! => Tu dois toi-même t’assurer que la clé existe pour éviter une erreur.
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);



    echo $name  . ' ' . $age;
}

?>


<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Eddy&age=38">Click</a> -->


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>

<div>
    <label for="name">Name : </label>
    <input type="text" name="name" />
</div>


<div>
    <label for="age">Age : </label>
    <input type="text" name="age" />
</div>

<input type="submit" value="Submit" name="submit">

</form>