<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <ul role="list" class="divide-y divide-gray-300">
            <?php foreach ($notes as $note) : ?>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4 hover:underline">
                        <div class="min-w-0 flex-auto">
                            <p class="text-l font-semibold leading-6 text-gray-900"> <a href="/note?id=<?= $note["id"] ?>"><?= htmlspecialchars($note["body"]) ?></a></p>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <p class="mt-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <a href="/note/create">Create Notes</a>
            </button>
        </p>

    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
