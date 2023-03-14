<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/scss/condition-et-booléen/condition-et-booléen.css" type="text/css">
    <title>condition et booléen</title>
</head>

        <h1><?= 'READY PLAYER ONE' ?></h1>
    
<body>
    <?php
    $name = "READY PLAYER ONE"; // je crée ma variable.
    $read = true; //j'ajoute un booléen a ma variable ((true)VRAI ou (false)FAUX)

    
    if ($read == true) { //je crée une condition vrai ('si/if') et je rajoute la deuxième variable que j'ai créé précèdement.
        $message = "You have read " .$name; //condition vrai (je crée une variable et "je rajoute un texte avec le nom de la .variable que j'ai crée au début de mon code php").
    
    } else { //je crée une conditon faux ('sinon/else')
        $message = "You have NOT read " .$name; //je crée une variable et "je rajoute un texte avec le nom d'une .variable que j'ai crée au début de mon code php")
    }
    ?>
    <h1 class="message">
        <?php echo $message; //echo affiche les elements de de ma conditon si c'est vrai ou faux?> 
        <!--<?= $message; ?>-->
    </h1>
</body>

</html>