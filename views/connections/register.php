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
    <header>
        <?php
        if (isset($_SESSION['error'])) {
            if ($_SESSION['error'] == 'register') {
                echo '<script>window.alert("Le nom d\'utilisateur ou l\'adresse mail existe déjà. Veuillez les modifier!")</script>';
                $_SESSION['error'] == 0;
            }
        }
        ?>
        <nav class="flex">
            <img src="../img/logo.png" alt="logo">
            <ul class="flex">
                <li><a href="/">Accueil</a></li>
                <li><a href="/connection">Connexion</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
        <h1> L'évangile du vinyle </h1>
        <p> "On ne peut pas faire n’importe quoi avec la musique contemporaine. Il faut la jouer à bon Messiaen." - Une personne drôle</p>
    </header>
    <main>
        <div class="circle1"></div>
        <div class="container">
            <p> Vous n'avez pas de compte ? <a href="/connection">Cliquez ici !</a></p>
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