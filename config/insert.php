<?php
include_once 'config.php';
include_once 'conecta.php';
/*
 * Utilizar o método filter_input(METHOD, NOMECAMPO)
 */

$m = filter_input(INPUT_POST, 'matricula');
$n = filter_input(INPUT_POST, 'nome');
$s = filter_input(INPUT_POST, 'senha');
$e = filter_input(INPUT_POST, 'email');
$d = filter_input(INPUT_POST, 'data_nasc');
$x = filter_input(INPUT_POST, 'sex');


mysqli_select_db($link, "bd_hospital");

/*
 * DML - Datam Manipulation Language
 * sintaxe INSERT INTO tabela(campo, campo...) VALUES(v1,v2...)
 */

$query = "INSERT INTO usuario (matricula, nome, senha, email, data_nasc, sex) VALUES ('$m', '$n', '$s', '$e', '$d', '$x')";

/*
 * Verificar se a instrução foi executada
 */

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Inserido'); location = '../pages/formEdita.php'</script>";
    print $msg;
} else {
    $msg = "<script>alert('Erro!'); location = '../pages/formEdita.php'</script>";
    print $msg;
}
        
