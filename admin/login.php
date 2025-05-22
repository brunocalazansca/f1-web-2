<?php
    session_start();
    include_once ('../classes/manipulaDados.php');

    $manipula = new ManipulaDados();

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $manipula->setTable('tb_usuarios');

    $linhas = $manipula->validarLogin($usuario, $senha);

    if ($linhas == 0) {
        echo "<script>Usuário ou senha incorreto ou não cadastrado!</script>";
        echo "<script>location = 'telaLogin.php';</script>";

    } else {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;

        setcookie('nome_usuario', $usuario);
        setcookie('senha_usuario', $senha);
        header('location: index.php');;
    }
?>

