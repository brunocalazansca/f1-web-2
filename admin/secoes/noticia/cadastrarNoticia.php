<?php

?>

<div class="container mt-3">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Cadastrar Notícia</h4>
        </div>
        <div class="card-body">
            <form method="post" action="controller/noticia/CadastrarNoticia.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título da Notícia</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título da notícia" required>
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="5" placeholder="Digite a descrição" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="arquivo" class="form-label">Imagem ou Arquivo</label>
                    <input type="file" class="form-control" id="arquivo" name="arquivo">
                </div>

                <div class="mb-3">
                    <label for="data" class="form-label">Data</label>
                    <input type="date" class="form-control" id="data" name="data" required>
                </div>

                <div class="mb-3">
                    <label for="autor" class="form-label">Autor</label>
                    <select class="form-select" id="autor" name="autor" required>
                        <option value="0">--Autor(@)--</option>
                        <option value="Damacena">Matheus Damacena</option>
                        <option value="Maciel">Daniel Maciel</option>
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Enviar Notícia</button>
                    <button type="reset" class="btn btn-secondary">Limpar</button>
                </div>
            </form>
        </div>
    </div>
</div>
