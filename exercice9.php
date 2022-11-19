<?php
    require('class/Book.php');
    $myBook = new Book();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Utilisation d'une classe en PHP">
    <link rel="stylesheet" href="public/css/style.css">
    <div class="container">
        <title>Ex 9 - Utilisation d'une classe en PHP</title>
        <a href="./index.php">Retour à l'index</a>
        <h1>Exercice 9</h1>
        <div>id : <?= $myBook->getId(); ?></div>
        <div>titre : <?= $myBook->getTitle(); ?></div>
    </div>
</body>
</html>