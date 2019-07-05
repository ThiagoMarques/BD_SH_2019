<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
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
                    <form method="POST" action="../config/insert_pac.php">
                    <div class="form-group">
                                <label for="data_nasc">Data de Abertura</label>
                                <input type="date" class="form-control" name="data_abertura" placeholder=""
                                    value="<?=$linha['data_abertura']?>">
                            </div>
                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="nascimento">Data de Nascimento</label>
                                <input type="date" class="form-control" name="nascimento" placeholder=""
                                    value="<?=$linha['nascimento']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Digite o email">
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="endereco" class="form-control" name="endereco" id="endereco"
                                placeholder="Digite o endereço">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="phone" class="form-control" name="telefone" id="telefone"
                                placeholder="Digite o telefone">
                        </div>
                        <div class="form-group">
                            <label for="sex">Selecione o sexo</label>
                            <select class="form-control" name="sex" id="sex">
                                <option selected disable>Selecione o sexo</option>
                                <option value='M'>Masculino</option>
                                <option value='F'>Feminino</option>
                            </select>
                        </div>
                        <button type="submit" value="Cadastrar" class="btn btn-primary btn-lg btn-block">Registrar Paciente</button>
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