<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/connection.css">
    <title>Connexion - Blog</title>
</head>
<body>
    <header>
        <nav class="flex">
            <img src="../img/logo.png" alt="logo" >
            <ul class="flex">
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="/views/connection.php">Connexion</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
        <h1> L'évangile du vinyle </h1>
        <p> "On ne peut pas faire n’importe quoi avec la musique contemporaine. Il faut la jouer à bon Messiaen." - Une personne drôle</p>
    </header>
    <main class="container">
        <form class="flex" action="../controllers/ActionController.php" method="post">
            <h2> S'inscrire </h2>

            <label for="name">Votre nom :</label>
            <input type="text" name="name" >

            <label for="email">Votre email :</label>
            <input type="email" name="email" >

            <label for="password">Votre mot de passe :</label>
            <input type="password" name="password" >

            <button type="submit">C'est parti !</button>
        </form>
    </main>
    <p> Vous n'avez pas de compte ? <a href="./register.php">Cliquez ici !</a></p>
</body>
</html>