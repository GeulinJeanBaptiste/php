<?php require 'partials/header.php' ?>
<h2>Modifier cette note</h2>

<form method="POST">
    <label for="titre">Titre</label>


    <input type="text" name="title" id="title" value="<?= isset($_POST['title']) ? $_POST['title'] : $noteUpdate['title'] ?>">
    <label for="content">Contenu :</label>
    <textarea name="content" id="content" cols="30" rows="10"><?php if (isset($_POST['content'])) : echo $_POST['content'];
                                                                endif; ?></textarea>
    <label for="author">Auteur :</label>
    <select name="author" id="author">
        <option value=""></option>

        <?php foreach ($users as $user) : ?>

            <option value="<?= $user['user_id'] ?>" <?php
                                                    if (isset($_POST['author'])) :
                                                        $author_id = (int) $_POST['author'];
                                                    else :
                                                        $author_id = (int) $noteUpdate['user_id'];
                                                    endif;

                                                    if (isset($author_id) && ($author_id === $user['user_id'])) :  ?> selected <?php endif; ?>>
                <?= $user['name'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <div>
        <label for="image">Modifier image</label>
        <input type="file" name="image" id="image">
    </div>
    <input type="submit" value="Modifier">
    <!------------>
    <!-- IMAGE -->
    <!------------>
    <?php if ($noteUpdate['image']) : ?>
        <p><img src="uploads/<?= $noteUpdate['image'] ?>" alt=""></p>
    <?php endif; ?>
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
</form>

<!-- ERREUR -->
<?php if (isset($errors) && !empty($errors)) :

?>
    <p class="error"><?= $errors ?></p>
<?php

endif; ?>
<?php require 'partials/footer.php' ?>