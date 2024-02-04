<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <p class="mb-6">
            <button type="submit" class="rounded-md w-40 bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><a href="/notes">Go Back</a></button>
        </p>
        <div class="flex border-2 rounded-lg border-gray-200 shadow-md border-opacity-50 p-8 sm:flex-row flex-col">
            <div class="flex-grow">
                <p class="leading-relaxed text-base"><?= htmlspecialchars($note["body"]) ?></p>
            </div>
            <div class="flex  mt-10">
                <button class="rounded-md w-40 mr-8 bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><a href="/note/edit?id=<?= $note["id"] ?>">Edit Note</a></button>
                <form method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= $note["id"] ?>" hidden>
                    <button type="submit" class="rounded-md w-40 bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete Note</button>
                </form>
            </div>
        </div>


    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>