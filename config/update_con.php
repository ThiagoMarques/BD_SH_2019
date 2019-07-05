<?php

/* 
 * Pegar os valores dos campos do formulário
 * 
 */

$p = filter_input(INPUT_POST, 'paciente');
$m = filter_input(INPUT_POST, 'medico');
$d = filter_input(INPUT_POST, 'data');
$h = filter_input(INPUT_POST, 'hora');
$i = filter_input(INPUT_POST, 'id');

//inclui o arquivo conecta.php
include_once 'conecta.php';

mysqli_select_db($link, "bd_hospital");

/*
 * DML = Data Manipulation Language
 * Sintaxe: UPDATE tabela SET campo = valor, campo = valor
 * "INSERT INTO consulta (Nome_Pac, Nome_Med, Data_Consulta, Horario) VALUES ('$p', '$m', '$d', '$h')";
 */

$query = "UPDATE consulta SET Nome_Pac = '$p', Nome_Med = '$m', Data_Consulta = '$d', Horario='$h' WHERE ID_Pac = '$i'";

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Editado'); location='../pages/geral.php'</script>";
    print $msg;
}

