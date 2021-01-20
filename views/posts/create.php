<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="/css/post.css">
    <link rel="shortcut icon" href="../img/android-chrome-192x192.png" type="image/x-icon">
    <title>Acceuil - Blog</title>
</head>

<body>
    <?php include_once './src/views/templates/header.php' ?>
    <a id="add" href="/posts">Retour aux posts</a>
    <form action="/posts" method="POST">
        <h3>Nouveau Post</h3>
        <input type="hidden" name="user_id" value="<?= $_SESSION['user'][0] ?>">
        <label for="title">Titre :</label>
        <input name="title" type="text">
        <label for="message">Message :</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        </div>
        <input id="submit" type="submit" value="Valider">
    </form>
    <?php include_once './src/views/templates/footer.php' ?>

</body>

</html>