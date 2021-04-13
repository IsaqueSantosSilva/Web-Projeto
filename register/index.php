<?php 
require '../Classes/UserRegister.php';
if (isset($_POST['btn'])) {
	(new UserRegister())->insertRegisterData();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Loja</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<header>
		<h1>Take mah money</h1>
	</header>
	
	<form class="ui form" method="POST" action=" <? $_SERVER['PHP_SELF'] ?>">
		<h2>Cadastro</h2>
		<div class="field">
			<label>Nome de Usuário</label>
			<input type="text" name="username" required>
		</div>
		<div class="field">
			<label>Idade</label>
			<input type="text" name="age" required min="10" max="80" maxlength="2">
		</div>
		<div class="field">
			<label>Senha</label>
			<input type="password" name="pwd" required>
		</div>
		<div class="field">
			<label>Confirmar Senha</label>
			<input type="password" name="cpwd" required>
		</div>
		<a href="../login/index.php">Já possui uma conta?</a>

		<button class="ui black button" name="btn" type="submit">Enviar</button>
	</form>




	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>
</html>