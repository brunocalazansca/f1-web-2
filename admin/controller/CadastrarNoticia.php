<?php

    include_once ("../../model/Noticia.php");
    include_once ("../../classes/manipulaDados.php");

    function convert($String) {
        return iconv ("UTF-8", "ISO8859-1", $String);
    }

    $conexao = new ManipulaDados();
    $conexao->setTable('tb_noticias');
    $conexao->setFields('titulo, descricao, url, data, autor');

    $noticia = new Noticia();

    $noticia->setTitulo($_POST['titulo']);
    $noticia->setDescricao($_POST['descricao']);
    $nomeArquivoSalvo = convert($_FILES['arquivo']['name']);
    $noticia->setUrl("imgNoticias/" . $nomeArquivoSalvo);
    $noticia->setData($_POST['data']);
    $noticia->setAutor($_POST['autor']);
    $urlLocalSalvo = '../../imgNoticias/' . $nomeArquivoSalvo;

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $urlLocalSalvo);

    $conexao->setDados("
        '{$noticia->getTitulo()}',
        '{$noticia->getDescricao()}',
        '{$noticia->getUrl()}',
        '{$noticia->getData()}',
        '{$noticia->getAutor()}'
    "
    );

    $conexao->insert();
    echo $conexao->getStatus();
?>