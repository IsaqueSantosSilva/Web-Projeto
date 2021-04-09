<?php 
	require'../Classes/UserLogin.php';

	if (isset($_POST['btn1'])) {
		(new UserLogin())->validateLogin();
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<form class="ui form" method="POST" action=" <? $_SERVER['PHP_SELF'] ?>">
		<h2>Login</h2>
		<div class="field">
			<label>Nome de Usuário</label>
			<input type="text" name="login_user" placeholder="">
		</div>
		<div class="field">
			<label>Senha</label>
			<input type="password" name="login_pwd" placeholder="">
		</div>
		
		<button class="ui black button" name="btn1" type="submit">Enviar</button>
	</form>
</body>
</html>