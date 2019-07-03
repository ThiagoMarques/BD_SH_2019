<!DOCTYPE html>
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
    <h1 style="font-family: 'Amatic SC', cursive; font-size: 50px;">Sistema Hospitalar</h1>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="images/hospital.png" width="50" height="50">
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Cadastrar <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Medico</a></li>
                            <li><a href="#">Enfermeiro</a></li>
                            <li><a href="#">Administrativo</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="pages/cadastro.php">Geral</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="pages/geral.php">Visualizar Usuarios</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Consultas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Marcar Consulta</a></li>
                            <li><a href="#">Marcar Retorno</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Visualizar Consultas</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="card">
        <div class="col-sm-8">
        <img src="images/init.jpg" class="img-fluid">
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
</body>

</html>