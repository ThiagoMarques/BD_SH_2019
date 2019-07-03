<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

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

        <form class="form-signin" method="post" action="/BD_SH_2019/config/autenticar.php">
            <h2 class="form-signin-heading">Sistema Hospitalar</h2>
            <label for="matricula" class="sr-only">Matricula</label>
            <input type="text" name="matricula" id="matricula" class="form-control" placeholder="Insira sua matricula"
                required autofocus>
            <label for="senha" class="sr-only">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" placeholder="Insira sua senha" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        </form>

    </div> <!-- /container -->



    <!-- <h1>Sistema Hospital</h1>
        <fieldset>
            <legend>Efetue o Login</legend>
            <form method="post" action="/BD_SH_2019/config/autenticar.php">
                <input type="text" name="matricula" placeholder="Matricula" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <input type="submit" value="Entrar">
            </form>
        </fieldset>
        <hr>
        <span>&COPY;Copyright 2018 - Todos os direitos reservados</span>
        <?php
        
        ?> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>