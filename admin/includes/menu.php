<?php
?>

<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand text-white " href="#"><img src="../images/f1_logo.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="?secao=equipe/cadastrarEquipe">Cadastrar equipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="?secao=piloto/cadastrarPiloto">Cadastrar piloto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="?secao=corrida/cadastrarCorrida">Cadastrar corrida</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="?secao=noticia/cadastrarNoticia">Cadastrar notícia</a>
                </li>
                <li class="nav-item">
                    <p class="nav-link text-white">|</p>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="?secao=noticia/deletarNoticia">Deletar notícia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="?secao=noticia/alterarNoticia">Alterar notícia</a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link text-white ms-auto mb-2 mb-lg-0" href="logout.php">Sair</a>-->
<!--                </li>-->
            </ul>
        </div>
        <a class="nav-link text-white ms-auto mb-2 mb-lg-0" href="logout.php">Sair</a>
        <img class="img-custom" src="../images/macqueen.png">
    </div>
</nav>
