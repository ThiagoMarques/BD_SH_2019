<?php
session_start();
//Evitando acesso a URL sem login
if(!empty($_SESSION['id'])) {
    //Caso a variável global id exista
    echo "Olá ".$_SESSION['nome'].", bem-vindo! <br>";
    echo "<a href='sair.php'>Sair</a>";
} else {
    $_SESSION['msg'] = "<div class='alert alert-danger'>Área Restrita</div>";
    header("Location: login.php");
}



