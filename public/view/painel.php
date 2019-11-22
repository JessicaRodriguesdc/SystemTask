<?php
include('../controller/verificacaoLogin.php');
include('../controller/listaTarefas.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Painel</title>
        <meta charset="utf-8">       
        <link rel="stylesheet" type="text/css" href="css/painel.css">
        <script type="text/javascript" src="view/js/index.js"></script>
    </head>
        <body>
            <header>
                <a  id="sair" href="../controller/logout.php">Sair</a>
                <h2>Painel | Sistema de tarefas</h2>
            </header>
            <section>
                <div id="login">
                
                    <table>
                        <tr>
                            <th scope="col">Nome da Tarefa</th>
                            <th scope="col">Status</th>
                            <th scope="col">Data Inicial</th>
                            <th scope="col">Data Final</th>
                            <th scope="col">Excluir</th>
                            <th scope="col">Editar</th>     
                        </tr>
                        <?php while($dado = $prod->fetch_array()){?>
                        <tr>
                            <td><?php echo $dado['nomeTarefa'];?></td>
                            <td><?php echo $dado['status'];?></td>
                            <td><?php echo $dado['dataInicil'];?></td>
                            <td><?php echo $dado['dataTermino'];?></td>          
                        </tr>
                        <?php }?>
                    </table>
            </section>
            <footer>
                <p>&copy;JéssicaRodrigues</p>
            </footer> 
	</body>	
</html>