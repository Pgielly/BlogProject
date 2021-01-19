<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon carnet de viennoiseries</title>
</head>

<body>
    <a href="/posts">⬅️ Retour aux recettes</a>
    <h1>Les recettes de Tonton</h1>
    <h3>Nouvelle recette</h3>
    <form action="/posts" method="POST">
        <div>
            <label>
                <!-- <input type="hidden" name="user_id" value="<?= $_SESSION['user']['id'] ?>"> -->
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