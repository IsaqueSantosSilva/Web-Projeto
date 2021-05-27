<?php 
require'../Classes/UserLogin.php';

if (isset($_POST['btn1'])) {
	(new UserLogin())->validateOnlineLogin();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="icon" href="../icon/GGIcon.png" style="width: 100%; height: 100%">
</head>
<body>
	<header>
		<h1 id="title">Gamin' Go</h1>
	</header>
	
	<form class="ui form" method="POST" action=" <? $_SERVER['PHP_SELF'] ?>">
		<h2>Login</h2>
		<div class="field">
			<label>Nome de Usuário</label>
			<input type="text" name="login_user" autocomplete="off" placeholder="Digite seu usuário" required placeholder="">
		</div>
		<div class="field">
			<label>Senha</label>
			<input type="password" name="login_pwd" autocomplete="off" placeholder="Sua senha" required placeholder="">
		</div>
		<a href="../register/index.php" style="text-decoration: none;">Não possui cadastro?</a>
		<div class="position-button">
			<button class="ui black button" name="btn1" type="submit">
				<i class="paper plane outline icon"></i>
				Login
			</button>
		</div>
	</form>


	

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
	<script type="text/javascript">
		$('.ui.basic.modal').modal('show');
	</script>
</body>
</html>