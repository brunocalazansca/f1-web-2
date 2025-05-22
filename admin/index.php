<?php
    include_once("VerUrl.php");
?>
 <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>F1</title>
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../css/admin/app-topo-admin.css" type="text/css">

    </head>
    <body>
        <?php
            include("includes/topo.php");
            include("includes/menu.php");
        ?>
        <?php
            session_start();
            $usuario = $_SESSION['usuario'];
            echo "<h1>Bem vindo, $usuario!</h1>";
        ?>
        <main>
            <?php
                $red = new VerUrl();
                $red -> trocarUrl(@$_GET['secao']);
                include("includes/rodape.php");
            ?>
        </main>
        <script src="../js/bootstrap.bundle.js"></script>
    </body>

</html>



