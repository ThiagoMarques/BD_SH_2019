<?php
include_once 'config.php';
include_once 'conecta.php';
/*
 * Utilizar o método filter_input(METHOD, NOMECAMPO)
 */

$e = filter_input(INPUT_POST, 'matricula');
$n = filter_input(INPUT_POST, 'nome');
$s = filter_input(INPUT_POST, 'senha');

mysqli_select_db($link, "bd_hospital");

/*
 * DML - Datam Manipulation Language
 * sintaxe INSERT INTO tabela(campo, campo...) VALUES(v1,v2...)
 */

$query = "INSERT INTO usuario (matricula, nome, senha) VALUES ('$e', '$n', '$s')";

/*
 * Verificar se a instrução foi executada
 */

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Inserido'); location = 'index.php'</script>";
    print $msg;
} else {
    print "Dados não inseridos<br>";
}
        
