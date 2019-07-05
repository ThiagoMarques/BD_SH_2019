<?php
include_once 'config.php';
include_once 'conecta.php';
/*
 * Utilizar o método filter_input(METHOD, NOMECAMPO)
 */

$a = filter_input(INPUT_POST, 'data_abertura');
echo $a;
$n = filter_input(INPUT_POST, 'nome');
echo $n;
$d = filter_input(INPUT_POST, 'nascimento');
echo $d;
$e = filter_input(INPUT_POST, 'email');
echo $e;
$r = filter_input(INPUT_POST, 'endereco');
echo $r;
$t = filter_input(INPUT_POST, 'telefone');
echo $t;
$x = filter_input(INPUT_POST, 'sex');
echo $x;


mysqli_select_db($link, "bd_hospital");

/*
 * DML - Datam Manipulation Language
 * sintaxe INSERT INTO tabela(campo, campo...) VALUES(v1,v2...)
 */

$query = "INSERT INTO paciente (data_abertura, nome, nascimento, sexo, endereco, telefone, email) VALUES ('$a', '$n', '$d', '$x', '$r', '$t' '$e')";

/*
 * Verificar se a instrução foi executada
 */

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Inserido'); location = '../pages/geral.php'</script>";
    print $msg;
} else {
    // $msg = "<script>alert('Erro!'); location = '../pages/geral.php'</script>";
    // print $msg;
}
        
