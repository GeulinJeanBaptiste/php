<?php require 'views/partials/header.php' ?>

<body>
    <h1>Admin Notes</h1>
    <ul>
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>User</th>
        </tr>
        <?php
        foreach ($notes as $note) : ?>
            <table>
                <tr>
                    <th><a href="/note?id=<?= $note['id'] ?>"><?= $note['title'] ?></th>
                    <th><a href="/note?id=<?= $note['id'] ?>"><?= $note['content'] ?></th>
                    
                    <th><a href="/note-update?id=<?= $note['id'] ?>" class="btn">Modifier cette note</a></th>
                    <th><a href="/note-delete?id=<?= $note['id'] ?> " onClick="return confirm ('Etes vous certain de vouloir supprimer cet note !?');">Supprimer cette note</a></th>
                </tr>
            </table>
        <?php
        endforeach; ?>
    </ul>
    <p><a href="/note-new">Ajouter une note</a></p>
</body>

<?php require 'views/partials/footer.php' ?>