<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/android-chrome-192x192.png" type="image/x-icon">
    <title>Acceuil - Blog</title>
</head>

<body>
    <header>
        <nav class="flex">
            <img src="../img/logo.png" alt="logo" >
            <ul class="flex">
                <li><a href="/">Accueil</a></li>
                <?php 
                    if (isset($_SESSION['user'])) {
                        echo '<li><a href="/deconnect">Deconnection</a></li>';
                    }else{
                        echo '<li><a href="/connection">Connexion</a></li>';
                    }
                ?>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
        <h1> L'évangile du vinyle </h1>
        <p> "On ne peut pas faire n’importe quoi avec la musique contemporaine. Il faut la jouer à bon Messiaen." - Une personne drôle</p>
    </header>
    <main>
        <p>Coucou c'est nous</p>
    </main>
</body>

</html>
