<?php require 'partials/header.php' ?>
<h2>Ajouter une nouvelle note ici.</h2>

<form action="">
    <label for="titre">Titre</label>
    <input type="text" name="title" id="title">
    <label for="content">Contenu :</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>
    <label for="user">Auteur</label>
    <select name="user" id="user">
        <option value="1">John Doe</option>
        <option value="2">Ben chiant</option>
        <option value="3">Jane Doe</option>
    </select>
    <input type="submit" value="Ajouter">
</form>
<?php require 'partials/footer.php' ?>