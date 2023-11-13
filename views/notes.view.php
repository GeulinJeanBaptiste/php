<?php require "partials/header.php"; ?>

<?php

?>

<body>
    <h1>Notes</h1>
    <ul>
        <?php
        $i = 1;
        foreach ($notes as $note) : ?>
            <li>
                <?= $i ?><a href="/note?id=<?= $note['id'] ?>">
                    <?= $note['title'] ?>
                </a> -<a href="
/note-delete?id=<?= $note['id'] ?> 
" class="supprimer" onClick="return confirm ('Etes vous certain de vouloir supprimer cet note !?');">
                    x
                </a>
            </li>
        <?php
            $i = $i + 1;
        endforeach; ?>
    </ul>
    <p><a href="/note-new">Ajouter une note</a></p>
</body>
<?php require "partials/footer.php"; ?>