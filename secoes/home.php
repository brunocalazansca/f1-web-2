<?php
include_once('classes/manipulaDados.php');

$noticiaRecebida = new ManipulaDados();
$noticiaRecebida->setTable('tb_noticias');
$noticias = $noticiaRecebida->getAllDataTable();

    foreach ($noticias as $noticia) {
?>

    <div class="card mb-3 w-50 mx-auto">
        <img class="img-fluid" src='<?= $noticia["url"] ?>'>
        <div class="card-body mx-auto">
            <h5 class="card-title"><?= $noticia["titulo"] ?></h5>
            <p class="card-text"><?= $noticia["descricao"] ?></p>
            <p class="card-text"><small class="text-body-secondary"><?= $noticia["data"] ?> - <?= $noticia["autor"] ?></small></p>
        </div>
    </div>

<?php
    }
?>
