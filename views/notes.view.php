<?php require "partials/header.php"; ?>

<?php

foreach ($notes as $value) {
    echo $value["title"];
};
?>

<body>
    <h1>Notes</h1>
    <ul>
        <?php
        foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>">
                    <?= $note['title'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
<?php require "partials/footer.php"; ?>