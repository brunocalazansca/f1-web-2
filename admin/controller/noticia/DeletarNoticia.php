<?php

    include_once("../../../model/Noticia.php");
    include_once("../../../classes/manipulaDados.php");

    $id = $_POST['id'];

    $conexao = new ManipulaDados();
    $conexao->setTable('tb_noticias');
    $conexao->setFieldPk('id');
    $conexao->setValuePk($id);
    $conexao->delete();

    echo $conexao->getStatus();
?>