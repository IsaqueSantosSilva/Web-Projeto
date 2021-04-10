<?php 
session_start();

if (isset($_POST['logoutbtn'])) {
	header("Location: ../register/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Loja Principal</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="../css/mainstore.css">
</head>

<body>
	<div class="login-data">
		<label>
			<?php echo "Usuário:" ."<i class='user icon'></i>"  . "<strong>" . $_SESSION['user'] . "</strong>" ?>
		</label>
		<div>
			<a href="../register/index.php">Logout</a>
		</div>		
	</div>

	<header>
		<h1>Take mah money</h1>
	</header>

	<section>
		<div class="ui cards">
			<div class="card">
				<div class="ui image">
					<img src="big.jpg">
				</div>
				<div class="content">
					<div class="header">Big Smoke</div>
					<div class="description">
						I'll have two number 9s, a number 9 large, a number 6 with extra dip, a number 7, two number 45s, one with cheese, and a large soda.
					</div>
				</div>
				<div class="ui vertical animated button" tabindex="0">
					<div class="hidden content">Comprar</div>
					<div class="visible content">
						<i class="shop icon"></i>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="ui image">
					<img src="big.jpg">
				</div>
				<div class="content">
					<div class="header">Big Smoke</div>
					<div class="description">
						I'll have two number 9s, a number 9 large, a number 6 with extra dip, a number 7, two number 45s, one with cheese, and a large soda.
					</div>
				</div>
				<div class="ui vertical animated button" tabindex="0">
					<div class="hidden content">Comprar</div>
					<div class="visible content">
						<i class="shop icon"></i>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="ui image">
					<img src="big.jpg">
				</div>
				<div class="content">
					<div class="header">Big Smoke</div>
					<div class="description">
						I'll have two number 9s, a number 9 large, a number 6 with extra dip, a number 7, two number 45s, one with cheese, and a large soda.
					</div>
				</div>
				<div class="ui vertical animated button" tabindex="0">
					<div class="hidden content">Comprar</div>
					<div class="visible content">
						<i class="shop icon"></i>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Divisor de conteudo -->
	<div class="ui horizontal divider">
		Terror
	</div>

	<section>
		<div class="ui cards">
			<div class="card">
				<div class="ui image">
					<img src="big.jpg">
				</div>
				<div class="content">
					<div class="header">Big Smoke</div>
					<div class="description">
						I'll have two number 9s, a number 9 large, a number 6 with extra dip, a number 7, two number 45s, one with cheese, and a large soda.
					</div>
				</div>
				<div class="ui vertical animated button" tabindex="0">
					<div class="hidden content">Comprar</div>
					<div class="visible content">
						<i class="shop icon"></i>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="ui image">
					<img src="big.jpg">
				</div>
				<div class="content">
					<div class="header">Big Smoke</div>
					<div class="description">
						I'll have two number 9s, a number 9 large, a number 6 with extra dip, a number 7, two number 45s, one with cheese, and a large soda.
					</div>
				</div>
				<div class="ui vertical animated button" tabindex="0">
					<div class="hidden content">Comprar</div>
					<div class="visible content">
						<i class="shop icon"></i>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="ui image">
					<img src="big.jpg">
				</div>
				<div class="content">
					<div class="header">Big Smoke</div>
					<div class="description">
						I'll have two number 9s, a number 9 large, a number 6 with extra dip, a number 7, two number 45s, one with cheese, and a large soda.
					</div>
				</div>
				<div class="ui vertical animated button" tabindex="0">
					<div class="hidden content">Comprar</div>
					<div class="visible content">
						<i class="shop icon"></i>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Divisor de conteudo -->
	<div class="ui horizontal divider">
		Puzzle
	</div>


	<section>
		<div class="ui cards">
			<div class="card">
				<div class="ui image">
					<img src="big.jpg">
				</div>
				<div class="content">
					<div class="header">Big Smoke</div>
					<div class="description">
						I'll have two number 9s, a number 9 large, a number 6 with extra dip, a number 7, two number 45s, one with cheese, and a large soda.
					</div>
				</div>
				<div class="ui vertical animated button" tabindex="0">
					<div class="hidden content">Comprar</div>
					<div class="visible content">
						<i class="shop icon"></i>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="ui image">
					<img src="big.jpg">
				</div>
				<div class="content">
					<div class="header">Big Smoke</div>
					<div class="description">
						I'll have two number 9s, a number 9 large, a number 6 with extra dip, a number 7, two number 45s, one with cheese, and a large soda.
					</div>
				</div>
				<div class="ui vertical animated button" tabindex="0">
					<div class="hidden content">Comprar</div>
					<div class="visible content">
						<i class="shop icon"></i>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="ui image">
					<img src="big.jpg">
				</div>
				<div class="content">
					<div class="header">Big Smoke</div>
					<div class="description">
						I'll have two number 9s, a number 9 large, a number 6 with extra dip, a number 7, two number 45s, one with cheese, and a large soda.
					</div>
				</div>
				<div class="ui vertical animated button" tabindex="0">
					<div class="hidden content">Comprar</div>
					<div class="visible content">
						<i class="shop icon"></i>
					</div>
				</div>
			</div>
		</div>
	</section>



	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>
</html>