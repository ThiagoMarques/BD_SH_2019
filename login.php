<?php
session_start();
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
                <div class="form-signin">
                    <h2 class="text-center">Área Restrita</h2>
                    <?php
                    //Se a variável restrita existir
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                        //inicia e destrói a variável
                    }
                    if (isset($_SESSION['msgcad'])) {
                        echo $_SESSION['msgcad'];
                        unset($_SESSION['msgcad']);
                        //inicia e destrói a variável
                    }
                    ?>
                    <form method="POST" action="valida.php">
                        <input class = "form-control" type="text" name="usuario" placeholder="Digite o seu usuário"><br>
                        <input class = "form-control" type="password" name="senha" placeholder="Digite o sua senha"><br>
                        <input class="btn btn-success btn-block" type="submit" name="btnLogin" value="Acessar">
                        <div class="row text-center" style="margin-top: 20px;">
                            <h4>Criar conta</h4>
                        <a href="cadastrar.php">Criar usuário</a> 
                        </div>
                                       
                    </form>
               </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </body>

