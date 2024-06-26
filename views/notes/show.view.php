<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p>
                <?= $note['text'] ?>
            </p>
            <p>
                <a href="/note/edit?id=<?= $note['id'] ?>">Edit</a>
            </p>
            <p>
                <a href="/notes">Back to notes...</a>
            </p>
            <form action="" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button>Delete Note</button>
            </form>
        </div>
    </main>

<?php require base_path('views/partials/footer.php'); ?>