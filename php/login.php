<?php

class Login
{

    public $email;
    public $senha;

    public function logar()
    {
        if ($this->email == "teste@teste.com" && $this->senha == "123456") {

            session_start();
            $_SESSION['email'] = $this->email;

            header('Location: http://localhost/projetoOsFase1/main.php');
        } else {

            header('Location: http://localhost/projetoOsFase1/index.php?m=1');
        }
    }
}

$logar = new Login();

if (!empty($_POST["username"]) && !empty($_POST["password"])) {

    $logar->email = $_POST["username"];
    $logar->senha = $_POST["password"];
    $logar->logar();
}
