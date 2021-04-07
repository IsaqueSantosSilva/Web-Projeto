<?php 

require '../Classes/UserRegister.php';
if (isset($_POST['btn'])) {
	(new UserRegister())->validatePassword();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Loja</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>
	<form class="ui form" method="POST" action=" <? $_SERVER['PHP_SELF'] ?>">
		<div class="field">
			<label>Nome de Usuário</label>
			<input type="text" name="username" placeholder="">
		</div>
		<div class="field">
			<label>Idade</label>
			<input type="text" name="age" placeholder="">
		</div>
		<div class="field">
			<label>Senha</label>
			<input type="password" name="pwd" placeholder="">
		</div>
		<div class="field">
			<label>Confirmar Senha</label>
			<input type="password" name="cpwd" placeholder="">
		</div>
		
		<button class="ui button" name="btn" type="submit">Enviar</button>
	</form>




	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>
</html>