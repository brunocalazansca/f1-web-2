<?php

    include_once ("../../model/Noticia.php");

    function convert($String) {
        return iconv ("UTF-8", "ISO8859-1", $String);
    }

    $noticia = new Noticia();

    $noticia -> setTitulo($_POST['titulo']);
    $noticia->setDescricao($_POST['descricao']);
    $nomeArquivoSalvo = convert($_FILES['arquivo']['name']);
    $noticia->setUrl("imgNoticias/" . $nomeArquivoSalvo);
    $noticia->setData($_POST['data']);
    $noticia->setAutor($_POST['autor']);
    $urlLocalSalvo = '../../imgNoticias/' . $nomeArquivoSalvo;

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $urlLocalSalvo);

    echo "Notícia recebida com sucesso!" . "<br>";

    echo "Título: " . $noticia -> getTitulo() . "<br>" .
        "Descrição: " . $noticia -> getDescricao() . "<br>" .
        "Nome do Arquivo: " . $nomeArquivoSalvo . "<br>" .
        "Data: " . $noticia -> getData() . "<br>" .
        "Autor: " . $noticia -> getAutor() . "<br>";

?>