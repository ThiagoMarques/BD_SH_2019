<?php

/* 
 * Pegar os valores dos campos do formulário
 * 
 */

$a = filter_input(INPUT_POST, 'data_abertura');
$n = filter_input(INPUT_POST, 'nome');
$d = filter_input(INPUT_POST, 'data_nasc');
$x = filter_input(INPUT_POST, 'sex');
$r = filter_input(INPUT_POST, 'endereco');
$t = filter_input(INPUT_POST, 'telefone');
$e = filter_input(INPUT_POST, 'email');
$i = filter_input(INPUT_POST, 'id');

//inclui o arquivo conecta.php
include_once 'conecta.php';

mysqli_select_db($link, "bd_hospital");

/*
 * DML = Data Manipulation Language
 * Sintaxe: UPDATE tabela SET campo = valor, campo = valor
 * Data_Abertura, Nome, Data_Nasc, Sex, Endereco, Telefone, Email)
 */

$query = "UPDATE paciente SET Data_Abertura = '$a', Nome = '$n', Data_Nasc = '$d', Sex='$x', Endereco='$r', Telefone='$t', Email='$e' WHERE ID_Pac = '$i'";

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Editado'); location='../pages/geralPac.php'</script>";
    print $msg;
}

