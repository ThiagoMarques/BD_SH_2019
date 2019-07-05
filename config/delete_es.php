<?php
    
    /*
     * Pegar o valor do parâmetro ID 
     */
    $id = filter_input(INPUT_GET, 'id');

    
    //incluir do arquivo de conexão com banco de dados
    include_once 'conecta.php';
    
    //selecionar o banco de dados
    mysqli_select_db($link, "bd_hospital");
    
    
    /*
     * DML (Data Manipulation Language)
     * Sintaxe: DELETE FROM nome_da_tabela WHERE (CONDIÇÃO) 
     */
    
    $query = "DELETE FROM estoque WHERE ID_Prod = '$id'";
    
    /*
     * verificar se a instrução SQL foi executada
     */
    
    if(mysqli_query($link, $query)) {
        $msg = "<script>alert('Registro Excluído');";
        $msg .= "location='../pages/estoque.php' </script>";
        print $msg;
                
    }
