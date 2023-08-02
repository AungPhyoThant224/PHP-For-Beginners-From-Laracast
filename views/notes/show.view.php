<?php require basePath('views/partials/header.php') ?>
<?php require basePath('views/partials/nav.php') ?>
<?php require basePath('views/partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <p class="mb-6">
            <a href="/notes" class="text-blue-500 hover:underline">
                go back....
            </a>
        </p>

        <p> <?= htmlspecialchars($note['body']) ?> </p>

        <form class="mt-6" method="post">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="text-sm text-red-500">Delete</button>
        </form>
    </div>
</main>

<?php require basePath('views/partials/footer.php') ?>
