<?php

session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_EMAIL);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_NUMBER_INT);

$expiracao = time() + (86400 * 30);
setcookie('nome', $nome, $expiracao);

if ($nome && $idade && $email) {
   
    echo 'Nome: ' . $nome . "<br/>";
    echo 'Idade: ' . $idade . "<br/>";
    echo 'Email: ' . $email;
} else {
    $_SESSION['Aviso'] = 'Preencha os Itens corretamente';
    header("Location: index.php");
}
