<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <section class="text-gray-600 body-font mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto flex flex-wrap justify-center">
            <p class="mt-6 ">
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <a href="/note/create">Create Notes</a>
                </button>
            </p>
        </div>
        <div class="container px-5 py-10 mx-auto flex flex-wrap justify-center">
            <div class="flex flex-wrap -m-4">
                <?php foreach ($notes as $note) : ?>
                    <div class="p-4 lg:w-1/2 md:w-full">
                        <div class="flex border-2 rounded-lg border-gray-300 shadow-md border-opacity-50 p-8 sm:flex-row flex-col">
                            <div class="flex-grow">
                                <p class="leading-relaxed text-base"><?= htmlspecialchars($note["body"]) ?></p>
                                <a href="/note?id=<?= $note["id"] ?>" class="mt-3 text-indigo-500 inline-flex items-center">View Note
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
</main>

<?php require base_path('views/partials/footer.php') ?>