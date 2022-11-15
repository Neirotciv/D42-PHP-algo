<?php
    $images = [3, 8, 144, 152];
    $imagesPerLine = 3;

    /**
     * Calculate the number of lines for a given number of elements per line
     * @param int $numberOfElements
     * @param int $elementsPerLine
     * @return int Number of lines
     */
    function numberOfLines(int $numberOfElements, int $elementsPerLine): int 
    {
        return ceil($numberOfElements / $elementsPerLine);
    }

    /**
     * Calculate the number of elements on the last line for a chosen number of elements per line
     * @param int $numberOfImages
     * @param int $imagesPerLine
     * @return int The number of elements on the last line
     */
    function elementsOnLastLine(int $numberOfElements, int $imagesPerLine):int 
    {
        return $numberOfElements % 3 === 0 ? $imagesPerLine : $numberOfElements % $imagesPerLine;
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
    <title>Ex 3 - Calcul du nombre d'images par ligne</title>
</head>
<body>
    <div class="container">
        <a href="./index.php">Retour à l'index</a>
        <h1>Exercice 3</h1>
        <p>Calculer le nombre de ligne affichées, et le nombre d'images sur la dernière ligne si nous décidons d'afficher 3 images par lignes.</p>
        <table>
            <thead>
                <th>Nombres d'images</th>
                <th>Nombres de lignes</th>
                <th>Nombres d'images sur dernière ligne</th>
            </thead>
            <?php foreach($images as $image): ?>
                <tr>
                    <td><?= $image; ?></td>
                    <td><?= numberOfLines($image, $imagesPerLine); ?></td>
                    <td><?= elementsOnLastLine($image, $imagesPerLine); ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>

