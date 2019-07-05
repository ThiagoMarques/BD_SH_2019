<?php

/* 
 * Pegar os valores dos campos do formulário
 * 
 */

$c = filter_input(INPUT_POST, 'cnpj');
$e = filter_input(INPUT_POST, 'endereco');
$n = filter_input(INPUT_POST, 'nome');
$t = filter_input(INPUT_POST, 'telefone');
$i = filter_input(INPUT_POST, 'id');

//inclui o arquivo conecta.php
include_once 'conecta.php';

mysqli_select_db($link, "bd_hospital");

/*
 * DML = Data Manipulation Language
 * Sintaxe: UPDATE tabela SET campo = valor, campo = valor
 */

$query = "UPDATE hospital SET CNPJ = '$c', Endereco = '$e', Nome = '$n', Telefone='$t' WHERE ID_Hos = '$i'";

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Editado'); location='../pages/hospital.php'</script>";
    print $msg;
}

