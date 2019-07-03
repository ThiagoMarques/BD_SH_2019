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
    <!---tela de cadastro de usuários-->
    <h2>Sistema Hospitalar</h2>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <img src="../images/hospital.png" width="50" height="50">
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <fieldset>
        <legend>Preencha os campos</legend>
        <form method="POST" action="../config/insert.php">
            <form>
                <div class="form-group">
                    <label for="matricula">Matricula</label>
                    <input type="text" class="form-control" name="matricula" id="matricula" placeholder="Digite a matricula">
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
                    <input type="email" class="form-control" name="email" id="email" placeholder="Digite o email">
                </div>
                <div>
                    <div class="form-group">
                        <label for="data_nasc">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nasc" placeholder="" value="<?=$linha['Data_Nasc']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sex">Select de exemplo</label>
                    <select class="form-control" name="sex" id="sex">
                        <option selected disable>Selecione o sexo</option>
                        <option value='M'>Masculino</option>
                        <option value='F'>Feminino</option>
                    </select>
                </div>
                <button type="submit" value="Cadastrar" class="btn btn-primary">Enviar</button>
                <a href="/BD_SH_2019/principal.php"></a><button type="submit" value="Cadastrar" class="btn btn-primary">Voltar</button>
            <!-- </form>
            <input type="matricula" name="matricula" required placeholder="matricula" />
            <input type="text" name="nome" required placeholder="nome" />
            <input type="password" name="senha" required placeholder="senha" />
            <input type="text" name="email" placeholder="Email" value="<?=$linha['Email']?>" required>
            <input type="date" name="data_nasc" placeholder="" value="<?=$linha['Data_Nasc']?>" required>
            <select name="sex">
                <option selected disable>Selecione o sexo</option>
                <option value='M'>Masculino</option>
                <option value='F'>Feminino</option>
            </select>
            <input type="submit" value="Cadastrar" /> -->
        </form>
    </fieldset>
    <hr>
    <!-- <a href="/BD_SH_2019/principal.php"><button>Voltar</button></a> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>