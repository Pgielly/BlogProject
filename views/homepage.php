<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="shortcut icon" href="../img/android-chrome-192x192.png" type="image/x-icon">
    <title>Acceuil - Blog</title>
</head>

<body>
    <?php include_once './src/views/templates/header.php' ?>
    <main>
        <div class="container">
            <section class="flex crew">
                <img src="../img/hans-vivek-By96LAr-34o-unsplash.jpg" alt="" srcset="">
                <article>
                    <h2>L'équipe</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto odit recusandae corrupti, at magnam perspiciatis ad optio excepturi cumque culpa et dolorem exercitationem quaerat quas eaque. Assumenda suscipit corporis dolores! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam quas magnam officiis asperiores laborum perspiciatis laudantium eius distinctio, velit expedita animi sed laboriosam commodi earum corporis quam esse dolorum facere!</p>
                </article>
            </section>

            <section class="story">
                <img src="../img/music-note.png" alt="" srcset="">
                <h2> L'histoire de la musique </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis voluptas porro hic mollitia accusamus, odit ipsam tempora ipsa nulla ratione dolore veritatis quo dolores iste unde soluta ullam aliquam ducimus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum natus voluptatibus ullam, voluptate consequuntur aliquam porro repellat sapiente omnis, minus necessitatibus possimus quaerat. Sunt exercitationem velit voluptatum odio quos! Perferendis.</p>
            </section>
        </div>
    </main>
    <?php include_once './src/views/templates/footer.php' ?>
</body>

</html>
