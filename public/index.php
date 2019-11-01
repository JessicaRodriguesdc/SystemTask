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
                <input name="Email"  class="input is-large" type ="text" placeholder="Usuário" autofocus="" id="Email"><br><br>
                <label>Senha</label>
                <input name="senha"  class="input is-large" type="password" placeholder="Senha" id="senha"><br><br>

                <input value="enter" type="submit"  id="enter"class="" ><br><br>  
            </form>       
        </div>
	</body>	
</html>