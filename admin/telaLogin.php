<?php
?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>F1 - Notícias</title>
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../css/app-tela-login.css" type="text/css">
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-md-6 col-lg-4">

            <div class="card shadow-sm">
                <div class="card-header text-center text-white card-header-custom">
                    <h5 class="mb-0">Login</h5>
                </div>

                <div class="card-body">
                    <form method="post" action="login.php">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Usuário" name="usuario" required>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" placeholder="Senha" name="senha" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-danger">
                                Entrar
                            </button>
                            <button type="reset" name="limpar" class="btn btn-outline-secondary">Limpar</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="../js/bootstrap.bundle.js"></script>
</body>

</html>

