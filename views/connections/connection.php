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
    <?php include_once './src/views/templates/header.php' ?>
    <main>
        <div class="circle1"></div>
        <div class="container">
            <p> Vous n'avez pas de compte ? <a href="/register">Cliquez ici !</a></p>
            <form class="flex" action="/connection" method="POST">
                <h2> S'identifier </h2>
                <label for="email">Votre email :</label>
                <input type="email" name="email">
                <label for="mdp">Votre mot de passe :</label>
                <input type="password" name="mdp">
                <button type="submit">C'est parti !</button>
            </form>
        </div>
        <div class="circle2"></div>
    </main>

</body>

</html>