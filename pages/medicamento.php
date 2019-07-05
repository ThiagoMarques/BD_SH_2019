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
    <div class="card">
        <div class="col-sm8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Código Medicamento</td>
                        <th scope="col">Nome Medicamento</td>
                        <th scope="col">Marca Medicamento</td>
                        <th scope="col">Validade</td>
                        <th scope="col">Ações</td>
                    </tr>
                </thead>
                <tbody>

                    <?php
                                include_once '../config/conecta.php';
                                mysqli_select_db($link, "bd_hospital");
                                $query = "SELECT * FROM medicamento order by ID_Medicamento DESC";
                                $result = mysqli_query($link, $query);
                                if(mysqli_num_rows($result)){
                                   while ($linha = mysqli_fetch_assoc($result)){
                                ?>

                    <tr>
                        <td><?= $linha['ID_Medicamento'] ?></td>
                        <td><?= $linha['Nome_Prod'] ?></td>
                        <td><?= $linha['Marca_Prod'] ?></td>
                        <td><?= $linha['Validade'] ?></td>
                        <td>
                            <a href="../config/deleteMedicamento.php?id=<?=$linha['ID_Medicamento']?>">
                                <button class="btn btn-info"
                                    onclick="return confirm('Confirmar exclusão do registro?')">Excluir</button></a>

                            <a href="formEditaMedicamento.php?id=<?=$linha['ID_Medicamento']?>">
                                <button class="btn btn-info">Editar</button></a>

                        </td>

                    </tr>

                    <?php
                                }
                                 } else {
                                   print "NEHUM REGISTRO ENCONTRADO.";
                                }
                              ?>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class=col-sm-8>
        <a href="/BD_SH_2019/principal.php"><button class="btn btn-primary">Voltar</button></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
</body>

</html>