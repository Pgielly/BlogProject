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
    <?php include_once './src/views/templates/header.php' ?>
    <main>
    <?php if (!isset($_SESSION['name'])) :?>
        <div class="title">
            <h1>Bienvenue</h1>
        </div>
        <div>
            <p>Merci de bien vouloir vous connecter!</p>
        </div>
     <?php else: ?>
            <h2> Bienvenue <?= $_SESSION['name'] ?> ! </h2>
            <p>Coucou c'est nous</p>
    <?php endif ?>
    </main>
</body>

</html>
