<header>
    <nav class="flex">
        <img src="../img/logo.png" alt="logo" >
        <ul class="flex">
            <li><a href="/">Accueil</a></li>
            <li><a href="/posts">Postes</a></li>
            <?php if (isset($_SESSION['user'])) : ?> 
                    <li><a href="/deconnect">Deconnexion</a></li>
            <?php else : ?>
                    <li><a href="/connection">Connexion</a></li>
            <?php endif ?>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>
    <h1> L'évangile du vinyle </h1>
    <p> "On ne peut pas faire n’importe quoi avec la musique contemporaine. Il faut la jouer à bon Messiaen." - Une personne drôle</p>
</header>