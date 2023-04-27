<?php

session_start();

if (!isset($_SESSION['email'])) {
    header('Location: http://localhost/projetoOsFase1/main.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistema de Ordem de Serviço</title>
    <link href="css/styleMain.css" rel="stylesheet" />
</head>

<body>
    <div class="d-flex" id="wrapper">

        <div class="border-end bg-light" id="sidebar-wrapper">
            
            <div class="sidebar-heading border-bottom bg-secondary text-white">Menu</div>

            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-light" href="#!">Cadastro Cliente</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-light" href="#!">Abertura OS</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-light" href="#!">Relatório</a>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary border-bottom">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0 ">
                            <li class="nav-item active">
                                <a class="nav-link" href="#!">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                <h1 class="mt-4">Seja Bem Vindo</h1>
                <p>
                    Sistema de Ordem de Serviço - Sistema sendo criado para Estudos, Conhecimento e Práticas !!!
                </p>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/scriptsMain.js"></script>
</body>

</html>









