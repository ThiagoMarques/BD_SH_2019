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
        $query = "SELECT * FROM hospital WHERE ID_Hos = '$id'";
        
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
                    <form method="POST" action="../config/update_hos.php">
                        <input type="hidden" name="id" value="<?=$linha['ID_Con']?>" required>
                        <div class="form-group">
                            <label for="sex">Selecione o Médico</label>
                            <?php
                                    include_once '../config/conecta.php';
                                    mysqli_select_db($link, "bd_hospital");
                                    $query = "SELECT u.ID_Usuario, u.Matricula, u.Nome, m.CRM AS CRM from usuario AS u INNER JOIN medico AS m ON u.ID_Usuario = m.ID_Med";
                                    $result = mysqli_query($link, $query);
                                    ?>
                            <select class="form-control" name="medico" id="medico">
                                <?php 
                                    while ($linha = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?php echo $linha['Nome']?>"><?php echo $linha['Nome']?></option>
                                <?php } ?>
                                   
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="paciente">Selecione o Paciente</label>
                                <?php
                                include_once '../config/conecta.php';
                                mysqli_select_db($link, "bd_hospital");
                                $query = "SELECT * FROM paciente order by Nome DESC";
                                $result = mysqli_query($link, $query);
                                ?>
                                <select class="form-control" name="paciente" id="paciente">
                                    <?php 
                                        while ($linha_pac = mysqli_fetch_assoc($result)) { ?>
                                            <option value="<?php echo $linha_pac['Nome']?>"><?php echo $linha_pac['Nome']?></option>
                                    <?php } ?>
                                       
                                </select>
                            </div>
                        <div class="form-group">
                            <label for="data">Data</label>
                            <input type="date" class="form-control" name="data" id="data"  value="<?=$linha['Data_Consulta']?>" required>
                        </div>

                        <div class="form-group">
                            <label for="hora">Horário</label>
                            <input type="time" class="form-control" name="hora" id="hora" value="<?=$linha['Horario']?>" required>
                        </div>
                        <button type="submit" value="Cadastrar" class="btn btn-primary btn-lg btn-block">Editar
                            Hospital</button>
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