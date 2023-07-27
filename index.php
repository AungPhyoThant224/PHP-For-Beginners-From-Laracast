<?php
    $books = [
        [
            "name" => "Do Androids Dream of Electric Sheep",
            "author" => "Jordan",
            "purchaseUrl" => "http://example.com",
            "releaseYear" => "1940"
        ],
        [
            "name" => "The Langoliers",
            "author" => "Jordan",
            "purchaseUrl" => "http://example.com",
            "releaseYear" => "1950"
        ],[
            "name" => "Hail Mary",
            "author" => "Gordan",
            "purchaseUrl" => "http://example.com",
            "releaseYear" => "2015"
        ]
    ];

    function filter($items, $fn){
        $filteredItems = [];

        foreach ($items as $item){
            if($fn($item)){
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }

    $filteredBooks = filter($books, function ($book) {
        return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
    });

    $movies = [
        [
            "name" => "Titanic",
            "releaseDate" => 1998
        ],
        [
            "name" => "Iron-man",
            "releaseDate" => 2001
        ],
        [
            "name" => "Avengers:Endgame",
            "releaseDate" => 2016
        ],
    ];

    $filteredMovies = array_filter($movies, function ($movie) {
        return $movie['releaseDate'] >= 2000;
    });

    require "index.view.php";
?>


