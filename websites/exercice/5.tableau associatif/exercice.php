<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>mon tableau</h1>
<?php
    $mangas = [
        [
            'name' => 'naruto ',
            'author' => 'Masashi Kishimoto',
            'years' => 1999,
            'purchaseUrl' => 'https://naruto.fandom.com/fr/wiki/Naruto_Uzumaki'
        ],
        [
            'name' => 'one piece ',
            'author' => 'Eiichirō Oda',
            'years' => 1997,
            'purchaseUrl' => 'https://onepiece.fandom.com/fr/wiki/One_Piece_Encyclop%C3%A9die'
        ],
        [
            'name' => 'chrno crusade ',
            'author' => 'Daisuke Moriyama',
            'years' => 1998,
            'purchaseUrl' => 'https://manga-encyclopedie.fandom.com/fr/wiki/Chrno_Crusade'
        ]
        ];
?>
<ul>
<?php foreach ($mangas as $manga) : ?>
    <li>
    <a href="<?= $manga ['purchaseUrl']?>">
    <?= $manga ['name']; ?> 
    </a>
    <ol><?= $manga ['author']; ?></ol>
    <ol><?= $manga ['years']; ?></ol>
</li>
<?php endforeach; ?> 
</ul>
</body>
</html>