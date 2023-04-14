<?php

session_start();

if (!isset($_SESSION['email'])){
    header('Location: http://localhost/projetoOsFase1/main.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ordem de Servico</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid p-4 bg-success text-white text-center">
        <h1>Ordem de Serviço PHP</h1>

    </div>

    <div class="container mt-5">
        <div class="row">
            <!--   <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Primeiro</th>
                        <th scope="col">Último</th>
                        <th scope="col">Nickname</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table> 
        </div>
    </div> --> 

    <footer>
        <div class="container-fluid mb-0 text-center p-3 bg-success">


        </div>
    </footer>


</body>

</html>