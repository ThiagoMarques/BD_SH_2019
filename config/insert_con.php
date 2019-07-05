<?php
include_once 'config.php';
include_once 'conecta.php';
/*
 * Utilizar o método filter_input(METHOD, NOMECAMPO)
 */

$p = filter_input(INPUT_POST, 'paciente');
$m = filter_input(INPUT_POST, 'medico');
$d = filter_input(INPUT_POST, 'data');
$h = filter_input(INPUT_POST, 'hora');

mysqli_select_db($link, "bd_hospital");

/*
 * DML - Datam Manipulation Language
 * sintaxe INSERT INTO tabela(campo, campo...) VALUES(v1,v2...)
 */

$query = "INSERT INTO consulta (Nome_Pac, Nome_Med, Data_Consulta, Horario) VALUES ('$p', '$m', '$d', '$h')";

/*
 * Verificar se a instrução foi executada
 */

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Inserido'); location = '../pages/geralCon.php'</script>";
    print $msg;
} else {
    // $msg = "<script>alert('Erro!'); location = '../pages/geral.php'</script>";
    // print $msg;
}
        
