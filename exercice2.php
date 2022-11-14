<?php
    $hello = "Hello world";
    $altDescription = "Un carnet de notes et un ordinateur portable affichant du code informatique";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Comment afficher du texte avec PHP au sein de balises HTML">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Ex 1 - Texte écrit à l'aide de PHP</title>
</head>
<body>
    <div class="container">
        <a href="./index.php">Retour à l'index</a>
        <h1>Exercice 2</h1>
        <p class="red"><?= $hello ?></p>
        <img src="public/img/pexels-lukas-574070.jpg" alt="<?= $altDescription ?>" >
    </div>
</body>
</html>

