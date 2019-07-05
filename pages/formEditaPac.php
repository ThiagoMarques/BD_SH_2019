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
    <!---tela de cadastro de usuários-->
    <?php
        //pegar o valor do parametro "id"
        $id = filter_input(INPUT_GET, 'id');
        
        //busca conexão com o banco
        include_once '../config/conecta.php';
        mysqli_select_db($link, 'bd_hospital');
        
        //CRIA A INSTRUÇÃO SQL (Consultar um registro);
        $query = "SELECT * FROM paciente WHERE ID_Pac = '$id'";
        
        //executa a instrução SQL
        $result = mysqli_query($link, $query);
        
        //Armazena o registro em array (assoc)
        $linha = mysqli_fetch_assoc($result);
        ?>
    <div class="card">
        <div class="card-body">
            <div class="col-sm-8">
                <fieldset>
                    <legend>Preencha os campos</legend>
                    <form method="POST" action="../config/update_pac.php">
                        <input type="hidden" name="id" value="<?=$linha['ID_Pac']?>" required>
                        <div class="form-group">
                                <label for="data_nasc">Data de Abertura</label>
                                <input type="date" class="form-control" name="data_abertura"  value="<?=$linha['Data_Abertura']?>">
                            </div>
                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" class="form-control" name="nome" id="nome" value="<?=$linha['Nome']?>" required>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="data_nasc">Data de Nascimento</label>
                                <input type="date" class="form-control" name="data_nasc" value="<?=$linha['Data_Nasc']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?=$linha['Email']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="endereco" class="form-control" name="endereco" id="endereco" value="<?=$linha['Endereco']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="phone" class="form-control" name="telefone" id="telefone" value="<?=$linha['Telefone']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="sex">Selecione o sexo</label>
                            <select class="form-control" name="sex" id="sex">
                                    <?php
                                    if($linha['Sex'] == 'M') {
                                        print "<option selected value = 'M'>Masculino</option>";
                                        print "<option value = 'F'>Feminino</option>";
                                    }
                                    
                                    if($linha['Sex'] == 'F') {
                                        print "<option selected value = 'F'>Feminino</option>";
                                        print "<option value = 'M'>Masculino</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <button type="submit" value="Cadastrar" class="btn btn-primary btn-lg btn-block">Editar
                            Paciente</button>
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