<?php
include_once 'config.php';
include_once 'conecta.php';
/*
 * Utilizar o método filter_input(METHOD, NOMECAMPO)
 */

$m = filter_input(INPUT_POST, 'nome_medicamento');
$r = filter_input(INPUT_POST, 'marca_medicamento');
$v = filter_input(INPUT_POST, 'validade');


mysqli_select_db($link, "bd_hospital");

/*
 * DML - Datam Manipulation Language
 * sintaxe INSERT INTO tabela(campo, campo...) VALUES(v1,v2...)
 * INSERT INTO `medicamento`(`ID_Medicamento`, `Nome_Prod`, `Marca_Prod`, `Validade`) VALUES ([value-1],[value-2],[value-3],[value-4])
 */

$query = "INSERT INTO medicamento (Nome_Prod, Marca_Prod, Validade) VALUES ('$m', '$r', '$v')";

/*
 * Verificar se a instrução foi executada
 */

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Inserido'); location = '../pages/medicamento.php'</script>";
    print $msg;
} else {
    $msg = "<script>alert('Erro!'); location = '../pages/medicamento.php'</script>";
    print $msg;
}
        
