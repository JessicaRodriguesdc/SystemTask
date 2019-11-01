<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Crud-PHP</title>
        <meta charset="utf-8">       
        <meta name="author" content="Jéssica Rodrigues"/>
        <link rel="stylesheet" type="text/css" href="view/css/index.css">
        <script type="text/javascript" src="view/js/index.js"></script>
	</head>
        <body>
            <div class="login" align="center">
            <form action="controller/login.php" method="post">
                <label>Usuário</label>
                <input type="email" id="email" name="email" placeholder="Usuario" required="" autocomplete="off"><br><br>
                <label>Senha</label>
                <input type="password" id="password" name="password" placeholder="Senha" required="" autocomplete="off"><br><br>
                <input type="submit" name="button" value="Entrar">
            </form>       
        </div>
	</body>	
</html>