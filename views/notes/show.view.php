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

        <footer class="my-5">
            <a href="note/edit?id=<?= $note['id'] ?>"
               class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
        </footer>
    </div>
</main>

<?php require basePath('views/partials/footer.php') ?>
