<?php 
require '../Classes/UserRegister.php';
if (isset($_POST['btn'])) {
	(new UserRegister())->validateEmail();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Loja</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" media="screen and (max-width: 900px)" href="../css/small-style.css">
</head>
<body>
	<header>
	<div>
		<h1 class="neon" data-text="Gamin' Go">Gamin' Go</h1>
	</div>
	</header>
	
	<form class="ui form" method="POST"  action=" <? $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

		<h3>Cadastro</h3>
		<div class="field">
			<input type="file" required name="archive">
		</div>
		<div class="field">
			<label>Nome de Usuário</label>
			<input type="text" name="username" autocomplete="off" placeholder="Utilize letras e numeros" required>
		</div>
		<div class="field">
			<label>Idade</label>
			<input id="age" type="text" name="age" autocomplete="off" placeholder="Minimo 14 anos" required maxlength="2">
		</div>
		<div class="field">
			<label>Email</label>
			<input type="text" name="email" autocomplete="off" placeholder="Email Válido" required>
		</div>
		<div class="field">
			<label>Senha</label>
			<input type="password" maxlength="8" autocomplete="off" placeholder="Min 6 e Max 8 caracteres" name="pwd" required>
		</div>
		<div class="field">
			<label>Confirmar Senha</label>
			<input type="password" autocomplete="off" placeholder="Confirme sua senha" maxlength="8" name="cpwd" required>
		</div>
		<a href="../login/index.php">Já possui uma conta?</a>

		<div class="position-button">
			<button class="ui green button" name="btn" type="submit">
				<i class="paper plane outline icon"></i>
				Cadastrar
			</button>
		</div>
	</form>




	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<script type="text/javascript">
		// Show modal
		$('.ui.basic.modal').modal('show');
	</script>
</body>
</html>