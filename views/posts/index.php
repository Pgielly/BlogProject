<?php session_start(); ?>
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
    <h1>Les recettes de Tonton</h1>
    <?php 
    
    if (isset($_SESSION['user'][0])) {
        ?><a href="/posts/create" role="button">➕ Nouvelle recette</a><?php
    }else{
        ?><p>Seul les inscrit et connécté peuve écrit des posts. <a href="/register">S'inscrire!</a></p><?php
    }
    
    ?>

    
    
    <?php foreach ($posts as $post) : ?>
        <article>
            <header>
                <a href="/posts/<?= $post->getId(); ?>">
                    <h3><?= htmlspecialchars($post->getTitle()); ?></h3>
                </a>
                <p><?= $post->getCreationDate(); ?></p>
            </header>
            <p><?= nl2br(htmlspecialchars($post->getMessage())); ?></p>
        </article>
    <?php endforeach; ?>
</body>

</html>