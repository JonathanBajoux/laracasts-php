<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> array</title>
</head>
<body>
    
<h1>mon tableau</h1>
<?php 
$utilisateurs = 
[
    "Yaguchi Sama",
    "Ouji Asahi",
    "Kitabayashi Rise"
];
?>
<ul>
 <?php foreach ($utilisateurs as $utilisateur) : ?>
    <li><?= $utilisateur;?></li>
    <?php endforeach; ?>
</ul>







    <h1>manga</h1>
    <?php
        $mangas = [ //je crée une variable et je crée un tableau dans ma variable j'ajoute mes élements.
            "naruto",
            "one piece",
            "chrnos crusade",
        ];
    ?>
<ul>
    <?php foreach ($mangas as $manga) ://la boucle va permettre de compter les éléments du tableau ?>
        <li><?= $manga; //j'ajoute la variable dans une liste?></li>
        <!--<li><?php echo $manga; ?></li>-->
    <?php endforeach;// met fin a la boucle?> 
</ul>
</body>
</html>