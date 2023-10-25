<?php include "partials/header.php"; ?>

<body>
    <h2><?= $note['title'] ?></h2>
    <p><?= $note['content'] ?></p>
    <p>Publiée le <?= $note['title'] ?> par <strong><?= $note['name'] ?></strong></p>
    <p><a href="/notes">Supprimer cet note</a></p>
    <p><a href="/notes">Retour à la liste des notes</a></p>
</body>

<?php include "partials/footer.php"; ?>