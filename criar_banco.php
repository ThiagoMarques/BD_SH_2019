<?php

include_once 'conecta.php';

/*
 * DDL -Definição de Dados
 * CREATE, ALTER, DROP
 * IF NOT EXISTS !
 */

$query = "CREATE DATABASE bd_hospital";

if(mysqli_query($link, $query)) {
    print "Banco de Dados criado com sucesso<br>";
} else {
    print "erro ao criar banco de dados, banco existente<br>";
}

