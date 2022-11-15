<?php 
$var = "Bonjour c'est moi.\n T'es le bien venu sur mon site";
$name = 'Victorien';

if (str_contains($var, 'moi')) {
    $wordToReplace = substr($var, 14, 3);
    $var = str_replace('moi', $name, $var);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Remplace un moi dans une chaîne de caractères si il existe">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Ex 6 - Remplacement dans une chaîne de caractères</title>
</head>
<body>
    <div class="container">
        <a href="./index.php">Retour à l'index</a>
        <h1>Exercice 6</h1>
        <p><?= $var; ?></p>
        <p>Mot qui a été remplacé : <?= $wordToReplace; ?></p>
        
    </div>
</body>
</html>