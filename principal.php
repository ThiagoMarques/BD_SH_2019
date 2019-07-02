<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!---tela de cadastro de usuários-->
        <h2>Tela de Cadastro</h2>
        <fieldset>
            <legend>Preencha os campos</legend>
            <form method="POST" action="insert.php">
                <input type="matricula" name="matricula" required placeholder="matricula"/>
                <input type="text" name="nome" required placeholder="nome"/>
                <input type="password" name="senha" required placeholder="senha"/>
                <input type="submit" value="Cadastrar"/>
            </form>
        </fieldset>
        <table style = "width: 80%; margin: 20px auto;">
            <tr Style = "background: #333; color: #FFF">
                <th colspan="5">Lista de Usuários</th>
            </tr>
            <tr>
                <td>Matricula</td>
                <td>Senha</td>
                <td>Ações</td>
            </tr>
            <?php
                include_once 'conecta.php';
                mysqli_select_db($link, "bd_hospital");
                $query = "SELECT * FROM usuario order by id_Usuario DESC";
                $result = mysqli_query($link, $query);
                if(mysqli_num_rows($result)){
                   while ($linha = mysqli_fetch_assoc($result)){
                ?>
            
                <tr>
                    <td><?= $linha['Matricula'] ?></td>
                    <td><?= $linha['Senha'] ?></td>
                    <td>
                        <a href="delete.php?id=<?=$linha['ID_Usuario']?>">
                            <button onclick="return confirm('Confirmar exclusão do registro?')">Excluir</button></a>
                        
                        <a href="formEdita.php?id=<?=$linha['ID_Usuario']?>">
                            <button>Editar</button></a>
                        
                    </td>
                       
                </tr>
                
              <?php
                }
                 } else {
                   //print "NEHUM REGISTRO ENCONTRADO.";
                }
              ?>
        </table>
    </body>
</html>


