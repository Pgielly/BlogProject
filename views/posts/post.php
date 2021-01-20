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
    <a href="/posts">Retour à la page des posts</a>
    <header>
        <h3><?= htmlspecialchars($post->getTitle()); ?></h3>
        <p><?= $post->getCreationDate(); ?></p>
    </header>
    <p><?= nl2br(htmlspecialchars($post->getMessage())); ?></p>
    <!-- <?php foreach ($comments as $comment) : ?>
        <article>
            <p><?= $comment->getCreationDate(); ?></p>
            <p><?= nl2br(htmlspecialchars($comment->getMessage())); ?></p>
        </article>
    <?php endforeach; ?> -->
</body>

</html>