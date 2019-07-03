<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <img src="../images/hospital.png" width="50" height="50" style="margin-top: 5px;">
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <h2 style="font-family: 'Amatic SC', cursive; margin-left: 50px;">Sistema Hospitalar</h2>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="card">
        <div class="card-body">
            <div class="col-sm-8">
                <fieldset>
                    <legend>Preencha os campos</legend>
                    <form method="POST" action="../config/insert.php">
                        <div class="form-group">
                            <label for="matricula">Matricula</label>
                            <input type="text" class="form-control" name="matricula" id="matricula"
                                placeholder="Digite a matricula">
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                        </div>
                        <div class="form-group">
                            <label for="email">Endereço de email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Digite o email">
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="data_nasc">Data de Nascimento</label>
                                <input type="date" class="form-control" name="data_nasc" placeholder=""
                                    value="<?=$linha['Data_Nasc']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex">Selecione o sexo</label>
                            <select class="form-control" name="sex" id="sex">
                                <option selected disable>Selecione o sexo</option>
                                <option value='M'>Masculino</option>
                                <option value='F'>Feminino</option>
                            </select>
                        </div>
                        <button type="submit" value="Cadastrar" class="btn btn-primary btn-lg btn-block">Registrar
                            Usuario</button>
                    </form>
                </fieldset>
                <hr>
                <a href="/BD_SH_2019/principal.php"><button class="btn btn-primary">Voltar</button></a>
            </div>
        </div>
    </div>
    <hr>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
</body>

</html>