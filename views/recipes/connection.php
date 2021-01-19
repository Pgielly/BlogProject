<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/connection.css">
    <link rel="shortcut icon" href="../img/android-chrome-192x192.png" type="image/x-icon">
    <title>Connexion - Blog</title>
</head>
<body>
    <header>
        <nav class="flex">
            <img src="../img/logo.png" alt="logo" >
            <ul class="flex">
                <li><a href="/">Accueil</a></li>
                <li><a href="/connexion-page">Connexion</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
        <h1> L'évangile du vinyle </h1>
        <p> "On ne peut pas faire n’importe quoi avec la musique contemporaine. Il faut la jouer à bon Messiaen." - Une personne drôle</p>
    </header>
    <main>
        <div class="circle1"></div>
        <div class="container">
            <form class="flex" action="/connection" method="post">
                <h2> S'identifier </h2>

                <label for="email">Votre email :</label>
                <input type="email" name="email" >

                <label for="password">Votre mot de passe :</label>
                <input type="password" name="password" >

                <button type="submit">C'est parti !</button>
                <p> Vous n'avez pas de compte ? <a href="/register">Cliquez ici !</a></p>
            </form>
        </div>
       <div class="circle2"></div>
    </main>
    
</body>
</html>