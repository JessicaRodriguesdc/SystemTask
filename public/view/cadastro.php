<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistema de tarefas</title>
        <meta charset="utf-8">       
        <link rel="stylesheet" type="text/css" href="css/cadastro.css">
        <script type="text/javascript" src="view/js/index.js"></script>
	</head>
        <body>
            <header>
                <h2>Cadastro</h2>
            </header>
            <section>
                <form action="../controller/cadastrar.php" method="post">
                    <label>Nome:</label><br>
                    <input type="nome" id="nome" name="nome" placeholder="Usuario" required="" autocomplete="off"><br><br>
                    <label>Email:</label><br>
                    <input type="email" id="email" name="email" placeholder="Email" required="" autocomplete="off"><br><br>
                    <label>Cpf:</label><br>
                    <input type="cpf" id="cpf" name="cpf" placeholder="Cpf" required="" autocomplete="off"><br><br>
                    <label>Telefone:</label><br>
                    <input type="telefone" id="telefone" name="telefone" placeholder="Telefone" required="" autocomplete="off"><br><br>
                    <label>Senha:</label><br>
                    <input type="password" id="password" name="password" placeholder="Senha" required="" autocomplete="off"><br><br>
                    <input type="submit" id="btn" name="button" value="Entrar"><br>
                </form>       
            </section>
            <footer>
                <p>&copy;jessicarodrigues</p>
            </footer> 
	</body>	
</html>