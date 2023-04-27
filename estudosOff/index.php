<?php
session_start();

require('header.php');
if($_SESSION['Aviso']){
    echo $_SESSION['Aviso'];
}

?>
<a href="apagar.php">Apagar Cookie</a>

<form method="POST" action="recebe.php">
    <label>
        Nome:
        <br/>
        <input type="text" name="nome"/>
    </label>
    <br/>
    <br/>

    <label>
        Email:
        <br/>
        <input type="email" name="email"/>
    </label>
    <br/>
    <br/>

    <label>
        Idade:
        <br/>
        <input type="text" name="idade"/>
    </label>
    <br/>
    <br/>

    <input type="submit" name="Enviar"/>

</form>