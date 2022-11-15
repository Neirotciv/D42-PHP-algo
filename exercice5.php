<?php 
$var = "Bonjour c'est moi.\n T'es le bien venu sur mon site";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Faire un saut de ligne dans une chaîne de caractères">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Ex 5 - Echappement de caractères</title>
</head>
<body>
    <div class="container">
        <a href="./index.php">Retour à l'index</a>
        <h1>Exercice 5</h1>
        <?= nl2br($var); ?>
    </div>
</body>
</html>