<?php

    require_once('class/Account.php');

    $myAccount = new Account();

    $deposits = [122, 143, 45, 28];
    $withdrawals = [12, 47, 60, 80];
    $currency = '€';
    
    // Add deposits
    foreach($deposits as $amount) {
        $myAccount->deposit($amount);
    }
    // Add withdrawals
    foreach($withdrawals as $amount) {
        $myAccount->withdraw($amount);
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Comment afficher du texte avec PHP au sein de balises HTML">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Ex 4 - Calcul bancaire</title>
</head>
<body>
    <div class="container">
        <a href="./index.php">Retour à l'index</a>
        <h1>Exercice 4</h1>
        <p>Calculer le solde bancaire si nous avons les différentes opérations de dépôt et de retrait suivantes</p>
        <ul>
            <li>- Dépôts : 122, 143, 45, 28</li>
            <li>- Retrait : 12, 47, 60, 80</li>
        </ul>
        <p>Calculer le montant moyen des dépôts et des retraits</p>
        <p>Solde du compte : <b><?= $myAccount->getBalance() . $currency; ?> </b></p>
        <p>Moyenne des dépôts : <b><?= $myAccount->getDepositsAverage() . $currency; ?></b></p>
        <p>Moyenne des retraits : <b><?= $myAccount->getWithdrawalsAverage() . $currency; ?></b></p>
    </div>
</body>
</html>