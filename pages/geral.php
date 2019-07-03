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
    <table style="width: 80%; margin: 20px auto;">
        <tr Style="background: #333; color: #FFF">
            <th colspan="6">Lista de Usuários</th>
        </tr>
        <tr>
            <td>Matricula</td>
            <td>Senha</td>
            <td>E-mail</td>
            <td>Data Nascimento</td>
            <td>Sexo</td>
            <td>Ações</td>
        </tr>

        <?php
                include_once '../config/conecta.php';
                mysqli_select_db($link, "bd_hospital");
                $query = "SELECT * FROM usuario order by id_Usuario DESC";
                $result = mysqli_query($link, $query);
                if(mysqli_num_rows($result)){
                   while ($linha = mysqli_fetch_assoc($result)){
                ?>

        <tr>
            <td><?= $linha['Matricula'] ?></td>
            <td><?= $linha['Senha'] ?></td>
            <td><?= $linha['Email'] ?></td>
            <td><?= $linha['Data_Nasc'] ?></td>
            <td><?= $linha['Sex'] ?></td>
            <td>
                <a href="../config/delete.php?id=<?=$linha['ID_Usuario']?>">
                    <button onclick="return confirm('Confirmar exclusão do registro?')">Excluir</button></a>

                <a href="formEdita.php?id=<?=$linha['ID_Usuario']?>">
                    <button>Editar</button></a>

            </td>

        </tr>

        <?php
                }
                 } else {
                   print "NEHUM REGISTRO ENCONTRADO.";
                }
              ?>
    </table>
    <hr>
    <a href="/BD_SH_2019/principal.php"><button>Voltar</button></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
</body>

</html>