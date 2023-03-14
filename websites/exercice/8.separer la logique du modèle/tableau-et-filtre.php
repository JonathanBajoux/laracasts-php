<?php
    $movies = [
        [
            'name' => 'retour vers le future ',
            'realisateur' => 'Robert Zemeckis ',
            'years' => '1985 - 1990',
            'url' => 'https://avatar-film.fandom.com/fr/wiki/Wiki_Avatar',
            'img' => 'retour vers le future.png'
        ],
        [
            'name' => 'Avatar ',
            'realisateur' => 'James Cameron ',
            'years' => '2009',
            'url' => 'https://avatar-film.fandom.com/fr/wiki/Wiki_Avatar'
        ],
        [
            'name' => 'Fast and furious ',
            'realisateur' => 'Vin Diesel ',
            'years' => '2001 - 2023',
            'url' => 'https://fastandfurious.fandom.com/fr/wiki/Wiki_Fast_And_Furious'
        ],
        [
            'name' => 'Harry Potter',
            'realisateur' => 'David Yates',
            'years' => '2001 - 2011',
            'url' => 'https://harrypotter.fandom.com/fr/wiki/Wiki_Harry_Potter'
        ],
        [
            'name' => 'Un flic à la maternelle',
            'realisateur' => 'Ivan Reitman',
            'years' => '1990',
            'url' => 'https://www.youtube.com/watch?v=xV-kbUY0fiI'
        ]
    ];
    $filteredMovies = array_filter($movies, function ($movie) {
        return $movie['years'] >= 2000 && $movie['years'] <= 2020;
    });

    require "page-html.php";
    ?>

    