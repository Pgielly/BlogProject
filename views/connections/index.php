<?php
session_start();
if (isset($_SESSION['user'][0])) {
  if ($_SESSION['user'][0] === 1) { ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="shortcut icon" href="../img/android-chrome-192x192.png" type="image/x-icon">
      <title>Admin</title>
    </head>

    <body>
      <?php include_once './src/views/templates/header.php' ?>
      <h1>Admin</h1>
      <table>
        <tr>
          <td>id</td>
          <td>user_id</td>
          <td>title</td>
          <td>Message</td>
        </tr>
        <?php foreach ($posts as $post) : ?>
          <tr>
            <td><?= $post->getId(); ?></td>
            <td><?= $post->getUserId(); ?></td>
            <td><?= $post->getTitle(); ?></td>
            <td><?= $post->getMessage(); ?></td>
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
