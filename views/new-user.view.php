<?php require 'partials/header.php' ?>
<h1>Ajouter un nouvel utilisateur</h1>

<form action="POST">
    <label for="newUser">Nouvel utilisateur</label>
    <input type="text" name="newUser" id="newUser" value="<?= isset($_POST['title']) ? $_POST['title'] : '' ?>">
    <input type="submit" value="Ajouter">
</form>

<?php require 'partials/footer.php' ?>