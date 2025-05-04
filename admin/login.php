<?php

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ((strcmp($usuario, "Bruno") == 0) && (strcmp($senha, "1814") == 0)) {
        header("location: index.php");

    } else {
        header("location: telaLogin.php");
    }

