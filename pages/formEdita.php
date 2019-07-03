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
    <h2>Sistema Hospitalar</h2>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Prontuario</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!---tela de cadastro de usuários-->
    <?php
        //pegar o valor do parametro "id"
        $id = filter_input(INPUT_GET, 'id');
        
        //busca conexão com o banco
        include_once 'conecta.php';
        mysqli_select_db($link, 'bd_hospital');
        
        //CRIA A INSTRUÇÃO SQL (Consultar um registro);
        $query = "SELECT * FROM usuario WHERE ID_Usuario = '$id'";
        
        //executa a instrução SQL
        $result = mysqli_query($link, $query);
        
        //Armazena o registro em array (assoc)
        $linha = mysqli_fetch_assoc($result);
        ?>

        
        
        <h1>TELA DE EDIÇÃO</h1>
        <fieldset>
            <legend>Edição de Usuário</legend>
            <form method="POST" action="update.php">
                <input type="hidden" name="id" value="<?=$linha['ID_Usuario']?>" required>
                <input type="matricula" name="matricula" placeholder="Matricula" value="<?=$linha['Matricula']?>" required>
                <input type="text" name="nome" placeholder="Nome" value="<?=$linha['Nome']?>" required>
                <input type="password" name="senha" placeholder="Senha" value="<?=$linha['Senha']?>" required>
                <input type="text" name="email" placeholder="Email" value="<?=$linha['Email']?>" required>
                <input type="date" name="data_nasc" placeholder="" value="<?=$linha['Data_Nasc']?>" required>
                <select>
                    <option selected disable>Selecione o sexo</option>
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
                <input type="submit" value="Atualizar" onclick="return confirm('Confirmar edição do registro?')">
            </form>
        </fieldset>
    <hr>
    <a href="/BD_SH_2019/principal.php"><button>Voltar</button></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>