<?php

/* 
 * Pegar os valores dos campos do formulário
 * 
 */

$m = filter_input(INPUT_POST, 'medico');
$p = filter_input(INPUT_POST, 'paciente');
$s = filter_input(INPUT_POST, 'medicamento');
$d = filter_input(INPUT_POST, 'descricao');
$i = filter_input(INPUT_POST, 'id');

//inclui o arquivo conecta.php
include_once 'conecta.php';

mysqli_select_db($link, "bd_hospital");

/*
 * DML = Data Manipulation Language
 * Sintaxe: UPDATE tabela SET campo = valor, campo = valor
 * $query = "INSERT INTO prescricao (Nome_Med, Nome_Pac, Nome_Medicamento, Descricao) VALUES ('$m', '$p', '$s', '$d')";
 */

$query = "UPDATE prescricao SET Nome_Med = '$m', Nome_Pac = '$p', Nome_Medicamento = '$s', Descricao='$d' WHERE ID_Pres = '$i'";

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Editado'); location='../pages/prescricoes.php'</script>";
    print $msg;
}

