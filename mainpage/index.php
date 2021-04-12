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
<!-- Divisor de conteudo -->
	<div class="ui horizontal divider">
		ADVENTURE
	</div>
	<section>
			<!-- HORIZON ZERO DAWN -->
			<div class="ui cards">
				<div class="card">
				<div class="ui image">
					<img src="covers/adventure/hzd.jpg">
				</div>
				<div class="content">
					<div class="header">Horizon Zero Dawn</div>
					<div class="description">
					Horizon Zero Dawn is a 2017 action role-playing game developed by Guerrilla Games and published by Sony Interactive Entertainment. The plot follows Aloy, a young hunter in a world overrun by machines, who sets out to uncover her past.
					</div>
				</div>
				<div class="ui vertical animated button" tabindex="0">
					<div class="hidden content">Comprar</div>
					<div class="visible content">
						<i class="shop icon"></i>
					</div>
				</div>
			</div>
            <!-- LIFE IS STRANGE -->
			<div class="card">
				<div class="ui image">
					<img src="covers/adventure/lis.jpg">
				</div>
				<div class="content">
					<div class="header">Life is Strange</div>
					<div class="description">
					Life Is Strange is a series of episodic graphic adventure games published by Square Enix's European subsidiary. Created by Dontnod Entertainment, the series debuted with the eponymous first installment, which released episodically in five chapters across 2015
					</div>
				</div>
				<div class="ui vertical animated button" tabindex="0">
					<div class="hidden content">Comprar</div>
					<div class="visible content">
						<i class="shop icon"></i>
					</div>
				</div>
			</div>
				<!-- SHADOW OF THE COLOSSUS -->
			<div class="card">
				<div class="ui image">
					<img src="covers/adventure/sotc.jpg">
				</div>
				<div class="content">
					<div class="header">Big Smoke</div>
					<div class="description">
					Shadow of the Colossus, released in Japan as Wander and the Colossus, is an action-adventure game developed by Japan Studio and Team Ico, and published by Sony Computer Entertainment for the PlayStation 2. The game was released in North America and Japan in October 2005 and PAL regions in February 2006.
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
		<!-- BLAIR WITCH -->
		<div class="ui cards">
			<div class="card">
				<div class="ui image">
					<img src="covers/horror/bw.jpg">
				</div>
				<div class="content">
					<div class="header">Blair Witch</div>
					<div class="description">
					Blair Witch is a psychological survival horror video game developed by Bloober Team based on the Blair Witch series of horror films. It was published by Lionsgate Games for Microsoft Windows, Xbox One and Xbox Game Pass on August 30, 2019.
					</div>
				</div>
				<div class="ui vertical animated button" tabindex="0">
					<div class="hidden content">Comprar</div>
					<div class="visible content">
						<i class="shop icon"></i>
					</div>
				</div>
			</div>
			<!-- DEAD SPACE 3 -->
			<div class="card">
				<div class="ui image">
					<img src="covers/horror/ds3.jpg">
				</div>
				<div class="content">
					<div class="header">Dead Space 3</div>
					<div class="description">
					Dead Space 3 is a science fiction survival horror action-adventure video game developed by Visceral Games and published by Electronic Arts. Announced at E3 2012 and released internationally in February 2013, it is the sequel to Dead Space 2 and the third main entry in the Dead Space series.
					</div>
				</div>
				<div class="ui vertical animated button" tabindex="0">
					<div class="hidden content">Comprar</div>
					<div class="visible content">
						<i class="shop icon"></i>
					</div>
				</div>
			</div>
			<!-- RESIDENT EVIL 7 -->
			<div class="card">
				<div class="ui image">
					<img src="covers/horror/re7.jpg">
				</div>
				<div class="content">
					<div class="header">Resident Evil 7</div>
					<div class="description">
					Resident Evil 7 is a 2017 survival horror game developed and published by Capcom. The ninth major installment in the Resident Evil series, Resident Evil 7 diverges from the more action-oriented Resident Evil 5 and Resident Evil 6, returning to the franchise's survival horror roots, emphasizing exploration.
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
		<!-- TETRIS ULTIMATE -->
		<div class="ui cards">
			<div class="card">
				<div class="ui image">
					<img src="covers/puzzle/tu.jpg">
				</div>
				<div class="content">
					<div class="header">Tetris Ultimate</div>
					<div class="description">
					Tetris Ultimate is a puzzle video game developed by American studio SoMa Play and published by Ubisoft. Ubisoft partnered with The Tetris Company to develop the game to celebrate the 30th anniversary of the Tetris franchise.
					</div>
				</div>
				<div class="ui vertical animated button" tabindex="0">
					<div class="hidden content">Comprar</div>
					<div class="visible content">
						<i class="shop icon"></i>
					</div>
				</div>
			</div>
		<!-- TANGRAM -->
			<div class="card">
				<div class="ui image">
					<img src="covers/puzzle/tangram.jpg">
				</div>
				<div class="content">
					<div class="header">Tangram</div>
					<div class="description">
					The tangram is a dissection puzzle consisting of seven flat polygons, called tans, which are put together to form shapes. The objective is to replicate a pattern generally found in a puzzle book using all seven pieces without overlap.
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
					<img src="covers/puzzle/tr.jpg">
				</div>
				<div class="content">
					<div class="header">The Room</div>
					<div class="description">
					The Room is a puzzle video game developed by Fireproof Games. The game was originally developed for the iOS platform and released in September 2012. The Android version debuted as part of a Humble Bundle in March 2013 and was subsequently released on Google Play.
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