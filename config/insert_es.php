<?php
include_once 'config.php';
include_once 'conecta.php';
/*
 * Utilizar o método filter_input(METHOD, NOMECAMPO)
 */

$m = filter_input(INPUT_POST, 'medicamento');
$d = filter_input(INPUT_POST, 'descricao');
$s = filter_input(INPUT_POST, 'movimentacao');
$e = filter_input(INPUT_POST, 'qtd_estoque');


mysqli_select_db($link, "bd_hospital");

/*
 * DML - Datam Manipulation Language
 * sintaxe INSERT INTO tabela(campo, campo...) VALUES(v1,v2...)
 */

$query = "INSERT INTO estoque (Nome_prod, Descricao, Data_Movimentacao, Qtd_Estoque) VALUES ('$m', '$d', '$s', '$e')";

/*
 * Verificar se a instrução foi executada
 */

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Inserido'); location = '../pages/estoque.php'</script>";
    print $msg;
} else {
    $msg = "<script>alert('Erro!'); location = '../pages/geral.php'</script>";
    print $msg;
}
        
