<?php
include_once 'config.php';
include_once 'conecta.php';
/*
 * Utilizar o método filter_input(METHOD, NOMECAMPO)
 */

$a = filter_input(INPUT_POST, 'data_abertura');
$n = filter_input(INPUT_POST, 'nome');
$d = filter_input(INPUT_POST, 'data_nasc');
$x = filter_input(INPUT_POST, 'sex');
$r = filter_input(INPUT_POST, 'endereco');
$t = filter_input(INPUT_POST, 'telefone');
$e = filter_input(INPUT_POST, 'email');


mysqli_select_db($link, "bd_hospital");

/*
2002-02-02 Nome 2002-05-05 M Endereço 1111111 email@mail.com
INSERT INTO `paciente` (data_abertura, nome, nascimento, sexo, endereco, telefone, email) VALUES ('2019-07-04', 'José Freitas Magalhães', '1970-07-01', 'M', 'SQS 204 Bloco G', '6135354747', 'thiagossmarques@gmail.com')
 * DML - Datam Manipulation Language
 * sintaxe INSERT INTO tabela(campo, campo...) VALUES(v1,v2...)
 */

$query = "INSERT INTO paciente (Data_Abertura, Nome, Data_Nasc, Sex, Endereco, Telefone, Email) VALUES ('$a', '$n', '$d', '$x', '$r', '$t', '$e')";

/*
 * Verificar se a instrução foi executada
 */

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Inserido'); location = '../pages/geralPac.php'</script>";
    print $msg;
} else {
    $msg = "<script>alert('Erro!'); location = '../pages/geralPac.php'</script>";
    print $msg;
}
        
