<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon carnet de viennoiseries</title>
</head>

<body>
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