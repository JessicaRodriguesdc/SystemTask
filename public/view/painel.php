<?php
include('../controller/listaTarefas.php');
include('../controller/verificacaoLogin.php');
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
                <button id="btn-link"> <a href="../controller/logout.php">Sair</a> </button>
                <h2>Painel | Sistema de tarefas</h2>
                <button id="btn-novo">Novo</button>
            </header>           
            <section>                
                    <hr>
                <div id="login">    

                    <table>
                        <tr>
                            <th scope="col">Nome da Tarefa</th>
                            <th scope="col">Status</th>
                            <th scope="col">Data Inicial</th>
                            <th scope="col">Data Final</th>                 
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>     
                        </tr>
                        <?php while($dado = $prod->fetch_array()){?>
                        <tr>
                            <td><?php echo $dado['nomeTarefa'];?></td>
                            <td><?php echo $dado['status'];?></td>
                            <td><?php echo $dado['dataInicil'];?></td>
                            <td><?php echo $dado['dataTermino'];?></td>
                            
                            <?php 
								echo "<td><a href='../controller/deletarRegistro.php?id=".$dado['id']."'>Excluir</a></td>";
							?> 
                        </tr>
                        <?php }?>
                    </table>
            </section>
            <footer>
                <p>&copy;JéssicaRodrigues</p>
            </footer> 
	</body>	
</html>