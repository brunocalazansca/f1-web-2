<?php
    include_once ("classes/manipulaDados.php");
    $manipula = new ManipulaDados();

    if (IsSet($_COOKIE['nome_usuario'])) {
        $nomeUsuario =  $_COOKIE['nome_usuario'];
    }

    if (IsSet($_COOKIE['senha_usuario'])) {
        $senhaUsuario =  $_COOKIE['senha_usuario'];
    }

    if (!(empty($nomeUsuario) || empty($senhaUsuario))) {
        $linhas = $manipula->validarLogin($nomeUsuario, $senhaUsuario);

        if ($linhas == 0) {
            setcookie('nome_usuario');
            setcookie('senha_usuario');
            header('location: telaLogin.php');
            exit;
        }
    } else {
        header('location: telaLogin.php');
        exit;
    }
?>
