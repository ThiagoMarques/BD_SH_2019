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
        $query = "SELECT * FROM estoque WHERE ID_Prod = '$id'";
        
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
                    <form method="POST" action="../config/update.php">
                        <input type="hidden" name="id" value="<?=$linha['ID_Usuario']?>" required>
                        <div class="form-group">
                            <label for="sex">Medicamento</label>
                            <?php
                                    include_once '../config/conecta.php';
                                    mysqli_select_db($link, "bd_hospital");
                                    $query = "SELECT * FROM medicamento order by Nome_Prod DESC";
                                    $result = mysqli_query($link, $query);
                                    ?>
                            <select class="form-control" name="medicamento" id="medicamento">
                                <?php 
                                    while ($linha2 = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?php echo $linha2['Nome_Prod']?>"><?php echo $linha['Nome_prod']?></option>
                                <?php } ?>
                                   
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descriçao</label>
                            <input type="text" class="form-control" name="descricao" id="descricao" value="<?=$linha['Descricao']?>">
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="validade">Data de Movimentaçao</label>
                                <input type="date" class="form-control" name="movimentacao" value="<?=$linha['Data_Movimentacao']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Quantidade</label>
                            <input type="number" class="form-control" name="qtd_estoque" id="qtd_estoque" value="<?=$linha['Qtd_Estoque']?>">
                        </div>
                        <button type="submit" value="Cadastrar" class="btn btn-primary btn-lg btn-block">Editar
                            Item Estoque</button>
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