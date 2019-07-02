<?php
/*
 * Arquivo de conexão
 */
include_once 'conecta.php';

/*
 * Seleciona o banco
 */
mysqli_select_db($link, "bd_hospital");

/*
* DDL 
*/
$query = "CREATE TABLE usuario(
        ID_Usuario int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
        Matricula varchar(180) NOT NULL,
        Nome varchar(50) NOT NULL,
        Senha varchar(16) NOT NULL
    );"; 

if(mysqli_query($link, $query)) {
    print "Tabela foi criada <br>";
} else {
    print "Tabela não criada <br>";
}
        

