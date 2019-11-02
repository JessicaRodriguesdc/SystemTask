<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistema de tarefas</title>
        <meta charset="utf-8">       
        <meta name="author" content="Jéssica Rodrigues"/>
        <link rel="stylesheet" href="view/css/login.css">
        <script type="text/javascript" src="view/js/index.js"></script>
	</head>
        <body>
            <header>
                <h1>Sistema de Tarefas</h1>
            </header>
            <section>
                <form action="controller/login.php" method="post">
                    <label>Usuário:</label><br>
                    <input type="email" id="email" name="email" placeholder="Usuario" required="" autocomplete="off"><br><br>
                    <label>Senha:</label><br>
                    <input type="password" id="password" name="password" placeholder="Senha" required="" autocomplete="off"><br><br>
                    <input type="submit" id="btn" name="button" value="Entrar"><br><br>

                    <a href="view/cadastro.php">Cadastre-se</a>
                </form>       
            </section>
            <footer>
                <p>&copy;jessicarodrigues</p>
            </footer>          
        </body>	
</html>