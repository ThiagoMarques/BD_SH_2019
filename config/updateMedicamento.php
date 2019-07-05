<?php

/* 
 * Pegar os valores dos campos do formulário
 * 
 */

$m = filter_input(INPUT_POST, 'nome_medicamento');
$r = filter_input(INPUT_POST, 'marca_medicamento');
$v = filter_input(INPUT_POST, 'validade');
$i = filter_input(INPUT_POST, 'id');

//inclui o arquivo conecta.php
include_once 'conecta.php';

mysqli_select_db($link, "bd_hospital");

/*
 * DML = Data Manipulation Language
 * Sintaxe: UPDATE tabela SET campo = valor, campo = valor
 * INSERT INTO medicamento (Nome_Prod, Marca_Prod, Validade) VALUES ('$m', '$r', '$v')
 */

$query = "UPDATE medicamento SET Nome_Prod = '$m', Marca_Prod = '$r', Validade = '$v' WHERE ID_Medicamento = '$i'";

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Editado'); location='../pages/medicamento.php'</script>";
    print $msg;
}

