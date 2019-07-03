<?php

/* 
 * Pegar os valores dos campos do formulário
 * 
 */

$m = filter_input(INPUT_POST, 'matricula');
$n = filter_input(INPUT_POST, 'nome');
$s = filter_input(INPUT_POST, 'senha');
$i = filter_input(INPUT_POST, 'id');

//inclui o arquivo conecta.php
include_once 'conecta.php';

mysqli_select_db($link, "bd_hospital");

/*
 * DML = Data Manipulation Language
 * Sintaxe: UPDATE tabela SET campo = valor, campo = valor
 */

$query = "UPDATE usuario SET Matricula = '', Nome = '', Senha = '' WHERE ID_Usuario = '$i'";

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Editado'); location='index.php'</script>";
    print $msg;
}

