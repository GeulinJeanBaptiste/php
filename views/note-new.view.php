<?php require 'partials/header.php' ?>
<h2>Ajouter une nouvelle note ici.</h2>

<form method="POST">
    <label for="titre">Titre</label>
    <input type="text" name="title" id="title" value="<?= isset($_POST['title']) ? $_POST['title'] : '' ?>">
    <label for="content">Contenu :</label>
    <textarea name="content" id="content" cols="30" rows="10"><?php if (isset($_POST['content'])) : echo $_POST['content'];
                                                                endif; ?></textarea>
    <label for="user">Auteur</label>
    <select name="user" id="user">

        <option value=""></option>

        <?php

        foreach ($users as $user) { ?>

            <option value="<?= $user["user_id"] ?>" <?php
                                                    if (isset($_POST['user'])) :
                                                        $user_id = (int) $_POST['user'];
                                                    endif;
                                                    if (isset($_POST['user']) && $_POST["user"] == $user["user_id"]) : echo "selected";

                                                    endif; ?>>
                <?= $user["name"] ?>
            </option>
        <?php };
        ?>
    </select>
    <input type="submit" value="Ajouter">
</form>
<?php if (isset($errors) && !empty($errors)) :

?>
    <p class="error"><?= $errors ?></p>
<?php

endif; ?>
<?php require 'partials/footer.php' ?>