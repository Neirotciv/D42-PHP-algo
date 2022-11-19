<?php

$role = 'autre';

$users = [
    ['name' => 'Victorien', 'role' => 'admin'],
    ['name' => 'personne1', 'role' => 'membre'],
    ['name' => 'personne2', 'role' => 'gestionnaire'],
    ['name' => 'personne3', 'role' => 'autre']
];

require_once('./class/User.php');
if (isset($_GET['name'])) {
    foreach($users as $user) {
        if ($user['name'] == $_GET['name']) {
            $role = $user['role'];
        }
    }
}

switch($role) 
{
    case 'admin':
        $title = "Vous êtes l'administrateur du site";
        break;
    case 'membre':
        $title = "Vous êtes membre du site";
        break;
    case 'gestionnaire':
        $title = "Vous êtes gestionnaire du site";
        break;
    case 'autre':
        $title = "Bienvenue invité";
        break;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gestion de rôle en avec tableau et switch en php">
    <link rel="stylesheet" href="public/css/style.css">
    <div class="container">
        <title>Ex 7 - Gestion des rôles</title>
        <a href="./index.php">Retour à l'index</a>
        <h1>Exercice 7</h1>
        <p><?= $title ?><p>

        <form action="./exercice7.php" method="get">
            <label for="name">Votre nom</label>
            <input type="text" id="name" name="name">
            <button type="submit">Connexion</button>
        </form>
    </div>
</body>
</html>