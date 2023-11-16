<nav>
    <ul class="navul">
        <li><a href="/">Acceuil</a></li>
        <li><a href="/notes">Notes</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/admin">Admin</a></li>
        <li><a href="/new-user">New User</a></li>
        <?php if (isset($_SESSION['isLogged'])) : ?>
            <li><a href="/logout">Déconnection</a></li>
        <?php
        else : ?>
            <li><a href="/login">Connexion</a></li>
        <?php
        endif; ?>

    </ul>
</nav>