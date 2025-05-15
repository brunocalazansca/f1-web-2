<?php
include_once('../classes/manipulaDados.php');

$noticiaRecebida = new ManipulaDados();
$noticiaRecebida->setTable('tb_noticias');
$noticias = $noticiaRecebida->getAllDataTable();

foreach ($noticias as $noticia) {
    $modalId = "modalAlterar_" . $noticia['id']; // assumindo que a notícia tem um campo 'id'
    ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="card mb-3 w-50 mx-auto">
        <img class="img-fluid" src='<?= "../" . $noticia["url"] ?>'>
        <div class="card-body mx-auto">
            <h5 class="card-title"><?= $noticia["titulo"] ?></h5>
            <p class="card-text"><?= $noticia["descricao"] ?></p>
            <p class="card-text"><small class="text-body-secondary"><?= $noticia["data"] ?> - <?= $noticia["autor"] ?></small></p>
        </div>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>">
                Alterar
            </button>
        </div>
    </div>

    <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="<?= $modalId ?>Label">Alterar Notícia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>

                <form action="controller/AlterarNoticia.php" method="POST" enctype="multipart/form-data">>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="titulo_<?= $noticia['id'] ?>" class="form-label">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo_<?= $noticia['id'] ?>" value="<?= $noticia["titulo"]?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="descricao_<?= $noticia['id'] ?>" class="form-label">Descrição</label>
                            <textarea class="form-control" name="descricao" id="descricao_<?= $noticia['id'] ?>" rows="3" required><?= $noticia["descricao"]?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="arquivo<?= $noticia['id'] ?>" class="form-label">Imagem</label>
                            <input type="file" class="form-control" name="arquivo" id="arquivo<?= $noticia['url'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="arquivo<?= $noticia['id'] ?>" class="form-label">Autor</label>
                            <select class="form-select" id="autor" name="autor" required>
                                <option value="0">--Autor(@)--</option>
                                <option value="Damacena">Matheus Damacena</option>
                                <option value="Maciel">Daniel Maciel</option>
                            </select>
                        </div>
                        <input type="hidden" name="id" value="<?= $noticia['id'] ?>">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php
}
?>

