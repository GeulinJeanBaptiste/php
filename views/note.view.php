<?php require 'partials/header.php' ?>
<h2><?= $note['title'] ?></h2>
<p><?= $note['content'] ?></p>
<p>Publiée le <?= $note['title'] ?> par <strong><?= $note['name'] ?></strong></p>

<p><a href="/note-update?id=<?= $note['id'] ?>" class="btn">Modifier cette note</a></p>

<p><a href="/note-delete?id=<?= $note['id'] ?> " onClick="return confirm ('Etes vous certain de vouloir supprimer cet note !?');">Supprimer cet note</a></p>
<a href="/note-delete?id=<?= $note['id'] ?> " onClick="return confirm ('Etes vous certain de vouloir supprimer cet note !?');">
</a>
<p><a href="/notes">Retour à la liste des notes</a></p>
<?php require 'partials/footer.php' ?>




<!-- Faire une boucle avec <action> qui ramene les ID et user. -->