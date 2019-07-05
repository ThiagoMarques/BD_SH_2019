<?php
include_once 'config.php';
include_once 'conecta.php';
/*
 * Utilizar o método filter_input(METHOD, NOMECAMPO)
 */

$i = filter_input(INPUT_POST, 'id');
$c = filter_input(INPUT_POST, 'coren');


mysqli_select_db($link, "bd_hospital");

/*
 * DML - Datam Manipulation Language
 * sintaxe INSERT INTO tabela(campo, campo...) VALUES(v1,v2...)
  */

$query = "INSERT INTO enfermeiro (ID_Enf, COREN) VALUES ('$i', '$c')";

/*
 * Verificar se a instrução foi executada
 */

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('COREN Adicionado'); location = '../pages/cadEnf.php'</script>";
    print $msg;
} else {
    $msg = "<script>alert('Erro!'); location = '../pages/cadEnf.php'</script>";
    print $msg;
}
        
