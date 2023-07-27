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

<ul>
    <?php foreach ($filteredBooks as $book) : ?>
        <li>
            <a href=<?= $book['purchaseUrl'] ?>>
                <?= "{$book['name']} {$book['releaseYear']} - By {$book['author']}" ?>
            </a>
        </li>
    <?php endforeach; ?>

    <?php foreach($filteredMovies as $movie): ?>
        <li>
            <?= $movie["name"] ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>