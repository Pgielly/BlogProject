<?php
session_start();
if (isset($_SESSION['user'][0])) { 
  if ($_SESSION['user'][0] === 1) { ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>admin</title>
    </head>

    <body>
      <a href="/">Retour à la page d'accueil</a>
      <h1>Admin</h1>
      <table>
        <tr>
          <td>id</td>
          <td>role_id</td>
          <td>name</td>
          <td>email</td>
        </tr>
        <?php foreach ($users as $user) : ?>
          <tr>
            <td><?= $user->getId(); ?></td>
            <td><?= $user->getRoleId(); ?></td>
            <td><?= $user->getName(); ?></td>
            <td><?= $user->getEmail(); ?></td>
          </tr>
        <?php endforeach ?>
      </table>
    </body>

    </html>
<?php } else {
    header('Location: /');
  }
} else {
  header('Location: /');
}
