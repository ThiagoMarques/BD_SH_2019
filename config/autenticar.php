<?php

/*
 * Pegar todos os valores inseridos no formulário
 */

$l = filter_input(INPUT_POST, 'matricula');
$s = filter_input(INPUT_POST, 'senha');

/*
 * Inclui o arquivo conecta.php
 */

include_once 'conecta.php';

/*
 * Seleciona o Banco de Dados
 */

mysqli_select_db($link, "bd_hospital");

/*
 * DML = Data Manipulation Language
 * Sintaxe: SELECT * FROM tabela WHERE campo=valor AND campo=valor
 */

$query = "SELECT * FROM usuario WHERE Matricula = '$l' AND Senha = '$s'";

/*
 * Executar a instrução SQL, armazenar na variável $result
 */

$result = mysqli_query($link, $query);
        
/*
 * Verificar se retornou registro (mysqli_num_rows($result))
 * Se retornar => logar, Senão => não logar
 */


if(mysqli_num_rows($result)) {
    $msg = "<script>alert('Usuário Logado');";
    $msg .= "location='/BD_SH_2019/principal.php' </script>";
    print $msg;
} else {
    print "Erro ao Logar";
}
