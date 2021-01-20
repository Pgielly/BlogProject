<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/connection.css">
    <link rel="shortcut icon" href="../img/android-chrome-192x192.png" type="image/x-icon">
    <title>Inscription - Blog</title>
</head>

<body>
            <?php include_once './src/views/templates/header.php' ?>
    <main>
        <?php
        if (isset($_SESSION['error'])) {
            if ($_SESSION['error'] == 'register') {
                echo '<script>window.alert("Le nom d\'utilisateur ou l\'adresse mail existe déjà. Veuillez les modifier!")</script>';
                $_SESSION['error'] == 0;
            }
        }
        ?>
        <div class="circle1"></div>
        <div class="container">
            <p> Vous avez un compte ? <a href="/connection">Cliquez ici !</a></p>
            <form class="flex" action="/register" method="POST">
                <h2> S'inscrire </h2>
                <label for="name">Votre nom :</label>
                <input type="text" name="name">
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