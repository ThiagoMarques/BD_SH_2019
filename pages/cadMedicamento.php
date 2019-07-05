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
                    <form method="POST" action="../config/insertMedicamento.php">
                        <div class="form-group">
                            <label for="nome_medicamento">Nome do Medicamento</label>
                            <input type="text" class="form-control" name="nome_medicamento" id="nome_medicamento"
                                placeholder="Digite o nome do medicamento">
                        </div>
                        <div class="form-group">
                            <label for="marca_medicamento">Marca do Medicamento</label>
                            <input type="text" class="form-control" name="marca_medicamento" id="marca_medicamento" placeholder="Digite a marca do medicamento">
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="validade">Data de Validade</label>
                                <input type="date" class="form-control" name="validade">
                            </div>
                        </div>
                        <button type="submit" value="Cadastrar" class="btn btn-primary btn-lg btn-block">Registrar
                            Medicamento</button>
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