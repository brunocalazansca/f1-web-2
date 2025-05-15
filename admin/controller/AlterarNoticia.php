<?php

    include_once ("../../model/Noticia.php");
    include_once ("../../classes/manipulaDados.php");

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $autor = $_POST['autor'];
    $imagem = $_FILES['arquivo'];

    $urlImagem = null;

    if ($imagem['error'] === UPLOAD_ERR_OK) {
        $pastaDestino = '../../imgNoticias/';
        $nomeArquivo = uniqid() . "_" . basename($imagem['name']);
        $caminhoCompleto = $pastaDestino . $nomeArquivo;

        if (move_uploaded_file($imagem['tmp_name'], $caminhoCompleto)) {
            $urlImagem = 'imgNoticias/' . $nomeArquivo;
        }
    }

    $camposUpdate = "titulo = '$titulo', descricao = '$descricao', autor = '$autor'";
    if ($urlImagem !== null) {
        $camposUpdate .= ", url = '$urlImagem'";
    }

    $conexao = new ManipulaDados();
    $conexao->setTable('tb_noticias');
    $conexao->setFieldPk('id');
    $conexao->setValuePk($id);
    $conexao->setFields($camposUpdate);
    $conexao->update();

    echo $conexao->getStatus();
?>