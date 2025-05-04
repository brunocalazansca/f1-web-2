<?php

include_once("classes/verUrl.php");

?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>F1 - Notícias</title>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    </head>
    <body>
        <?php
            include("includes/topo.php");
            include("includes/menu.php");
        ?>
        <main>
            <?php
                $red = new VerUrl();
                $red -> trocarUrl(@$_GET['secao']);
            ?>
            <?php
                include("includes/rodape.php");
            ?>
        </main>
        <script src="js/bootstrap.bundle.js"></script>
    </body>

</html>
