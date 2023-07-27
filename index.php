<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>

    <?php
        $books = [
            [
                "name" => "Do Androids Dream of Electric Sheep",
                "author" => "Jordan",
                "purchaseUrl" => "http://example.com",
                "releaseYear" => "2003"
            ],
            [
                "name" => "The Langoliers",
                "author" => "Jordan",
                "purchaseUrl" => "http://example.com",
                "releaseYear" => "2015"
            ],[
                "name" => "Hail Mary",
                "author" => "Gordan",
                "purchaseUrl" => "http://example.com",
                "releaseYear" => "2015"
            ]
        ];

        function filterByAuthor($books, $author){
            $filteredBooks = [];

            foreach ($books as $book){
                if($book['author'] === $author){
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        }

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

        function filterMoviesByDate($movies, $releaseDate){
            $filterMovies = [];

            foreach ($movies as $movie){
                if($movie['releaseDate'] > $releaseDate){
                    $filterMovies[] = $movie;
                }
            }

            return $filterMovies;
        }
    ?>

    <ul>
        <?php foreach (filterByAuthor($books, "Gordan") as $book) : ?>
            <li>
                <a href=<?= $book['purchaseUrl'] ?>>
                    <?= "{$book['name']} {$book['releaseYear']} - By {$book['author']}" ?>
                </a>
            </li>
        <?php endforeach; ?>

        <?php foreach(filterMoviesByDate($movies, 2000) as $movie): ?>
            <li>
                <?= $movie["name"] ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>