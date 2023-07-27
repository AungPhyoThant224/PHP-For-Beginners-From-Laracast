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
            ]
        ]
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <a href=<?= $book['purchaseUrl'] ?>>
                <li><?= "{$book['name']} {$book['releaseYear']}" ?></li>
            </a>
        <?php endforeach; ?>
    </ul>

</body>
</html>