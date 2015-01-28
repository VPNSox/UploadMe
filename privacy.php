<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Simple way to upload files">
        <meta name="author" content="carlgo11">
        <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <META HTTP-EQUIV="Expires" CONTENT="-1">
        <link rel="shortcut icon" type="image/icon" href="./res/media/logo.png"/>
        <title>
            <?php
            include './config.php';
            echo $conf['title'];
            ?>
        </title>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/stylesheet_no_centering.css" rel="stylesheet">
        <script src="./js/bootstrap.file-input.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
    <body>
        <?php
        include './res/navbar.php';
        getNavBar("privacy")
        ?>
        <div class="header">
            <h1>Privacy</h1>
        </div>
        <div class="content privacy">
            <?php
            include './res/markdown.php';
            echo markdown("./res/", "privacy.txt");
            ?>
        </div>
        <?php include './res/footer.php'; ?>
    </body>
