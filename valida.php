<?php
session_start();
include_once 'conexao.php';

$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
//Se o usuário tiver clicado
if($btnLogin) {
    //recebendo os dados através do filtro acima
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    //Teste de mesa
    //echo "$usuario - $senha";
    //Verificando se os campos estão preenchidos
    if((!empty($usuario)) AND (!empty($senha))) {
        //Gerar senha criptografada: echo password_hash($senha, PASSWORD_DEFAULT);
        //Pesquisar o usuário no BD:
        $result_usuario = "SELECT id, nome, email, senha FROM usuarios WHERE usuario='$usuario' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        //Se o resultado usuário trouxe alguma coisa:
        if($result_usuario) {
            //Ler o resultado e colocar na variável row, 
            $row_usuario = mysqli_fetch_assoc($resultado_usuario);
            //Comparar a senha, se a senha lida é igual a do BD
            //$row_usuario[''] = informando qual coluna vc quer ler...
            if(password_verify($senha, $row_usuario['senha'])) {
                //Se for válido
                //Atribuir todo valor que trouxer do BD em variáveis globais
                $_SESSION['id'] = $row_usuario['id'];
                $_SESSION['nome'] = $row_usuario['nome'];
                $_SESSION['email'] = $row_usuario['email'];
                
                header("Location: administrativo.php");
            } else {
                $_SESSION['msg'] = "<div class='alert alert-danger'>Usuário ou senha inválido</div>";
                header("Location: login.php");
            }
        }
    } else {
        $_SESSION['msg'] = "<div class='alert alert-danger'>Usuário ou senha inválido</div>";
        header("Location: login.php");
    }
}else {
    //Se o usuário não tiver clicado no botão, tentado acessar diretamente
    //Variável global
    $_SESSION['msg'] = "<div class='alert alert-danger'>Página não encontrada</div>";
    header("Location: login.php");
}

