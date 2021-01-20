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
    <a href="/posts">Retour aux posts</a>
    <h3>Nouveau Post</h3>
    <form action="/posts" method="POST">
        <div>
            <label>
                <input type="hidden" name="user_id" value="<?= $_SESSION['user'][0] ?>">
                <input type="hidden" name="user_id" value="2">
            </label>
        </div>
        <div>
            <label>
                Titre
                <input name="title" type="text">
            </label>
        </div>
        <div>
            <label>
                Message
                <textarea name="message" id="" cols="30" rows="10"></textarea>
            </label>
        </div>
        <input type="submit" value="Valider">
    </form>
</body>

</html>