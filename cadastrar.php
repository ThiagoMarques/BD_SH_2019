<?php
session_start();
//limpar memória
ob_start();
//Verificar se o usuário clicou no botão
//Recebe os valores
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario) {
    //teste de mesa: echo "Cadastrar"
    //Para incluir no BD, devemos chamar o arquivo de conexão
    include_once 'conexao.php';
    //Receber o valor dos outros campos: nome, email...
    //Utilizar um array para receber todos de uma vez, como o método POST é utilizado para
    //Enviar os dados, utilzaremos o POST para receber. 
    //Filter_Default: recebe como uma string
    $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //Validar usuário, iniciada como false pois se não houver erro, FALSO
    $erro = false;
    //tirar a tag, pois recebemos um array (retira tags, h1, h2...)
    $dados_st = array_map('strip_tags', $dados_rc);
    //retirar espaços em branco
    $dados = array_map('trim', $dados_st);
    //Verificar se há campo vazio:
    if(in_array('',$dados)) {
        $erro = true;
        $_SESSION['msg'] = "<div class='alert alert-danger'>Necessário preencher todos os campos</div>";
    }elseif((strlen($dados['senha']))<6) {
        $erro = true;
        $_SESSION['msg'] = "<div class='alert alert-danger'>A senha deve ter no mínimo 6 caracteres</div>";
    } elseif(stristr($dados['senha'], "'")) {
        $erro = true;
        $_SESSION['msg'] = "<div class='alert alert-danger'>Caractere (') utilizado na senha inválido</div>";
        
    }else{
        //verificando usuários duplicados
        $result_usuario = "SELECT id FROM usuarios WHERE usuario='".$dados['usuario']."'";
        //executar query
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        //Verificar se trouxe algum resultado, contando o número de usuários
        if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)) {
            $erro = true;
            $_SESSION['msg'] = "<div class='alert alert-danger'>Este usuário já está cadastrado</div>";
            
        }
        
        //verificando emails duplicados
        $result_usuario = "SELECT id FROM usuarios WHERE email='".$dados['email']."'";
        //executar query
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        //Verificar se trouxe algum resultado, contando o número de usuários
        if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)) {
            $erro = true; 
            $_SESSION['msg'] = "<div class='alert alert-danger'>Este e-mail já está cadastrado</div>";
        }
    }
    
    
    //Se for falsa:
    if(!$erro){
        //var_dump: visualiza como está vindo: var_dump($dados);
        //Criptografar a senha:
        $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
        //Inserir no BD
        $result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
            '".$dados['nome']."',
            '".$dados['email']."',
            '".$dados['usuario']."',
            '".$dados['senha']."'
            )";
        //executar, primeiro a conexão e depois valores
        $resultado_usuario = mysqli_query($conn,$result_usuario);
        //Mensagem de cadastro
        if(mysqli_insert_id($conn)) {
            $_SESSION['msgcad'] = "<div class='alert alert-success'>Usuário cadastrado com sucesso</div>";
            
            header("Location: login.php");
        }else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao cadastrar usuário</div>";
        }
    }
    
    
}
?>
<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Login</title>
            <link href="css/bootstrap.css" rel="stylesheet">
            <link href="css/signin.css" rel="stylesheet">
        </head>
        <body>
            <div class="container">
                <div class="form-signin" style="background: #42dea4">
   
                    <h2>Cadastrar Usuário</h2>
                    <?php
                    //Se a variável restrita existir
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                        //inicia e destrói a variável
                    }
                    ?>
                    <form method="POST" action="" >
                        <input type="text" name="nome" placeholder="Digite o nome e o sobrenome" class = "form-control"><br>

                        <input type="text" name="email" placeholder="Digite o e-mail" class = "form-control"><br>

                        <input type="text" name="usuario" placeholder="Digite o usuáio" class = "form-control"><br>

                        <input type="password" name="senha" placeholder="Digite o sua senha" class = "form-control"><br>
                        
                        <input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn btn-success"><br><br>
                        
                        <div class="row text-center" style="margin-top: 20px;">
                            Lembrou? <a href="login.php">Clique aqui</a> para logar
                        </div>

                    </form>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </body>

