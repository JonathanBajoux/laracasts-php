<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <ul>
        <?php foreach ($filteredMovies as $movie) : ?>
            <li>
                <?= $movie['name']; ?>
            </li>
            <ol><?= $movie['years']; ?></ol>
            <ol><?= $movie['realisateur']; ?></ol>
        <?php endforeach; ?>
    </ul>
</body>

</html>