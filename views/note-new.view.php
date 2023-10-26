<?php require 'partials/header.php' ?>
<h2>Ajouter une nouvelle note ici.</h2>

<form method="POST">
    <label for="titre">Titre</label>
    <input type="text" name="title" id="title">
    <label for="content">Contenu :</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>
    <label for="user">Auteur</label>
    <select name="user" id="user">
        <option value="" selected></option>
        <?php
        foreach ($users as $user) { ?>
            <option value="<?= $user["user_id"] ?>"><?= $user["name"] ?></option>
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