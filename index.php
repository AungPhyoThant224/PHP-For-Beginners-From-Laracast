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
            "Do Androids Dream of Electric Sheep",
            "The Langoliers",
            "Hail Mary"
        ]
    ?>

    <ul>
        <?php foreach ($books as $book) {
            echo "<li>$book</li>";
        } ?>

        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>