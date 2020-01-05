<?php
include('../controller/listaTarefas.php');
?>

<!DOCTYPE html>
<html>
	<head>
        <title>Painel</title>
        <meta charset="utf-8">       
        <link rel="stylesheet" type="text/css" href="css/painel.css">
        <script type="text/javascript" src="view/js/index.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!--bootstrap JS,Popper.js,and jQuery-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a  style="color: white" class="navbar-brand">S.T</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li  style="color: white" class="nav-item active">
                    <?php
                        include('../controller/verificacaoLogin.php');
                    ?>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">       
                <button class="btn btn-outline-primary my-2 my-lg-0"><a href="../controller/logout.php" id="btn-sair">Sair</a> </button>
                </form>
            </div>
        </nav>
            <header>
                <br>     
                <h2>Painel | Sistema de tarefas</h2>
                <hr>
                <br>
                <button id="btn-novo" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					Criar Registro
				</button>
            </header>
            <br>
            <section>                
                <div id="tabelaTarefas">    
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
                            <td></td>
                            <?php 
				echo "<td><a href='../controller/deletarRegistro.php?id=".$dado['id']."'>X</a></td>";
			    ?> 
                        </tr>
                        <?php }?>
                    </table>
            </section>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Adicionar Tarefa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="../controller/novoRegistroEstoque.php" method="post">  
                            <div class="modal-body" id="mynome">
                                <tr>
                                    <th><input type="text" id="nomeTarefa" name="nomeTarefa" placeholder="Nome da Tarefa" autocomplete="off"></th><br><br>
                                    <th><input type="text" id="status" name="status" placeholder="Status" autocomplete="off"></th><br><br>
                                    <th><input type="date" id="dataI" name="dataI" placeholder="Data Inicial" autocomplete="off"></th>
                                    <th><input type="date" id="dataF" name="dataF" placeholder="Data Final" autocomplete="off"></th>
                                </tr>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Salvar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <footer>
                <p>&copy;Jéssica Rodrigues da Costa</p>
            </footer> 
	</body>	
</html>
