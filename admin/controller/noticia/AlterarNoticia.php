<?php

    include_once("../../../model/Noticia.php");
    include_once("../../../classes/manipulaDados.php");

    function convert($String) {
        return iconv ("UTF-8", "ISO8859-1", $String);
    }

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $autor = $_POST['autor'];
    $imagem = $_FILES['arquivo'];

    $urlBanco = null;

    if (!empty($_FILES['arquivo']['name'])) {
        $nomeArquivoSalvo = uniqid() . "_" . convert($_FILES['arquivo']['name']);
        $urlBanco = "imgNoticias/" . $nomeArquivoSalvo;
        $urlLocalSalvo = '../../../imgNoticias/' . $nomeArquivoSalvo;

        if (!move_uploaded_file($_FILES['arquivo']['tmp_name'], $urlLocalSalvo)) {
            echo "Erro ao mover o arquivo!";
            exit;
        }
    }

    $camposUpdate = "titulo = '{$titulo}', descricao = '{$descricao}', autor = '{$autor}'";
    if ($urlBanco !== null) {
        $camposUpdate .= ", url = '{$urlBanco}'";
    }

    $conexao = new ManipulaDados();
    $conexao->setTable('tb_noticias');
    $conexao->setFieldPk('id');
    $conexao->setValuePk($id);
    $conexao->setFields($camposUpdate);
    $conexao->update();

    echo $conexao->getStatus();
?>