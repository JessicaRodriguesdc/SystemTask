<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistema de tarefas</title>
		<meta charset="utf-8">       
		<meta name="author" content="Jéssica Rodrigues"/>
		<link rel="stylesheet" href="view/css/login.css">
		<script type="text/javascript" src="view/js/index.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!--bootstrap JS,Popper.js,and jQuery-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
        <body>
            <header>
                <br>
                <h1>Sistema de Tarefas</h1>
            </header>
            <section>
                <form action="controller/login.php" method="post">
                <br>
                <h2><center>Login</center></h2>
                    <label>Usuário:</label><br>
                    <input type="email" id="email" name="email" placeholder="Usuario" required="" autocomplete="off"><br><br>
                    <label>Senha:</label><br>
                    <input type="password" id="password" name="password" placeholder="Senha" required="" autocomplete="off"><br><br>
                    <input type="submit" id="btn" name="button" class="btn btn-primary" value="Entrar"><br><br>
                    <a href="view/cadastro.php">Cadastre-se</a>
                </form>       
            </section>
            <footer>
            <p>&copy;Jéssica Rodrigues da Costa</p>
            </footer>          
        </body>	
</html>
