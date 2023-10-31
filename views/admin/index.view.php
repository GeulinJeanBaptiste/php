<?php require 'views/partials/header.php' ?>

<body>
    <h1>Admin Notes</h1>
    <ul>
        <?php
        $i = 1;
        ?>
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
                    <th><?= $i ?><a href="/note?id=<?= $note['id'] ?>"><?= $note['title'] ?></th>
                    <th><?= $i ?><a href="/note?id=<?= $note['id'] ?>"><?= $note['content'] ?></th>
                    
                </tr>
            </table>
        <?php
            $i = $i + 1;
        endforeach; ?>
    </ul>
    <p><a href="/note-new">Ajouter une note</a></p>
</body>


<?php require 'views/partials/footer.php' ?>