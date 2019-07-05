<?php
include_once 'config.php';
include_once 'conecta.php';
/*
 * Utilizar o método filter_input(METHOD, NOMECAMPO)
 */

$m = filter_input(INPUT_POST, 'medico');
$p = filter_input(INPUT_POST, 'paciente');
$s = filter_input(INPUT_POST, 'medicamento');
$d = filter_input(INPUT_POST, 'descricao');


mysqli_select_db($link, "bd_hospital");

/*
 * DML - Datam Manipulation Language
 * sintaxe INSERT INTO tabela(campo, campo...) VALUES(v1,v2...)
 */

$query = "INSERT INTO prescricao (Nome_Med, Nome_Pac, Nome_Medicamento, Descricao) VALUES ('$m', '$p', '$s', '$d')";

/*
 * Verificar se a instrução foi executada
 */

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Inserido'); location = '../pages/prescricoes.php'</script>";
    print $msg;
} else {
    $msg = "<script>alert('Erro!'); location = '../pages/prescricoes.php'</script>";
    print $msg;
}
        
