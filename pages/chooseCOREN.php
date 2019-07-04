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
        $query_med = "SELECT * FROM medico WHERE ID_Med = '$id'";
        $query = "SELECT * FROM usuario WHERE ID_Usuario = '$id'";
            
        //executa a instrução SQL
        $result = mysqli_query($link, $query);
        $result_med = mysqli_query($link, $query_med);
        
        //Armazena o registro em array (assoc)
        $linha = mysqli_fetch_assoc($result);
        $linha_med = mysqli_fetch_assoc($result_med);
        ?>
    <div class="card">
        <div class="card-body">
            <div class="col-sm-8">
            <h2>Usuários do Sistema</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Matrícula</td>
                        <th scope="col">Nome</td>
                        <th scope="col">Ações</td>
                    </tr>
                </thead>
                <tbody>

                    <?php
                                include_once '../config/conecta.php';
                                mysqli_select_db($link, "bd_hospital");
                                $query = "SELECT * FROM usuario WHERE id_usuario NOT IN (SELECT ID_Med FROM medico) OR (SELECT ID_Enf FROM enfermeiro)";
                                $result = mysqli_query($link, $query);
                                if(mysqli_num_rows($result)){
                                   while ($linha = mysqli_fetch_assoc($result)){
                                ?>

                    <tr>
                        <td><?= $linha['Matricula'] ?></td>
                        <td><?= $linha['Nome'] ?></td>
                        <td>
                            <a href="insertCRM.php?id=<?=$linha['ID_Usuario']?>">
                                <button class="btn btn-info">Selecionar</button></a>
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