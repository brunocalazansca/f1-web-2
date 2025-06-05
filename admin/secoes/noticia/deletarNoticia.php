<?php
include_once('../classes/manipulaDados.php');

    $noticiaRecebida = new ManipulaDados();
    $noticiaRecebida->setTable('tb_noticias');
    $noticias = $noticiaRecebida->getAllDataTable();

    foreach ($noticias as $noticia) {
        ?>

        <div class="card mb-3 w-50 mx-auto">
            <img class="img-fluid" src='<?= "../" . $noticia["url"] ?>'>
            <div class="card-body mx-auto">
                <h5 class="card-title"><?= $noticia["titulo"] ?></h5>
                <p class="card-text"><?= $noticia["descricao"] ?></p>
                <p class="card-text"><small class="text-body-secondary"><?= $noticia["data"] ?> - <?= $noticia["autor"] ?></small></p>
            </div>
            <form action="controller/noticia/DeletarNoticia.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $noticia["id"] ?>">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash"></i> Deletar
                    </button>
                </div>
            </form>
        </div>

        <?php
    }
?>
