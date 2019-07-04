<?php

/* 
 * Pegar os valores dos campos do formulário
 * 
 */

$m = filter_input(INPUT_POST, 'matricula');
$n = filter_input(INPUT_POST, 'nome');
$s = filter_input(INPUT_POST, 'senha');
$e = filter_input(INPUT_POST, 'email');
$d = filter_input(INPUT_POST, 'data_nasc');
$x = filter_input(INPUT_POST, 'sex');
$i = filter_input(INPUT_POST, 'id');

//inclui o arquivo conecta.php
include_once 'conecta.php';

mysqli_select_db($link, "bd_hospital");

/*
 * DML = Data Manipulation Language
 * Sintaxe: UPDATE tabela SET campo = valor, campo = valor
 */

$query = "UPDATE usuario SET Matricula = '$m', Nome = '$n', Senha = '$s', Email='$e', Data_Nasc='$d', Sex='$x' WHERE ID_Usuario = '$i'";

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Editado'); location='../pages/geral.php'</script>";
    print $msg;
}

