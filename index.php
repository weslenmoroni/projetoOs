<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem de Serviço</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <div class="wrapper">

        <?php
        $m = '';
            if( isset( $_GET['m'] ) &&  $_GET['m'] == 1 ) {
                $m = 'Não foi possivel logar';
            }
        ?>
        
        <form class="formSignin" action="php/login.php" method="post">
            
            <h2 class="formHeading">Efetuar Login</h2> <br><br>
            <p style="color:red"><?php echo $m?></p>
            <input type="email" class="formControl" name="username" placeholder="Email Address" required /><br>
            <input type="password" class="formControl" name="password" placeholder="Password" required /><br><br><br>
            <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Lembrar-me</label>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
    </div>

</body>

</html>