<?php
session_start();
require '../Classes/UserDelete.php';
require '../Classes/UserMoney.php';
require '../Classes/UserBio.php';

if (isset($_POST['logoutbtn'])) {
	header("Location: ../register/index.php");
}

if (isset($_POST['funds'])) {
	(new UserMoney())->verifyMoney();
}

if (isset($_POST['addBio'])) {
	(new UserBio())->addBio();
}

if (isset($_POST['btnClose'])) {
	(new UserDelete())->deleteCurrentUser();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Loja Principal</title>
	<meta charset="utf-8">
	<!-- CSS PARA O BOTAO SCROLL TO THE TOP -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweet-modal@1.3.2/dist/min/jquery.sweet-modal.min.css">
	<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

	<link rel="stylesheet" type="text/css" href="../css/mainstore.css">
	<link rel="icon" href="../icon/GGIcon.png" style="width: 100%; height: 100%">
</head>

<body>

	<header class="sticky">

		<div>
			<h1 data-text="Gamin' Go">Gamin' Go</h1>
		</div>

		<!-- Item de procura -->
		<!-- <div class="ui search">
			<div class="ui icon input">
				<input class="prompt" type="text" onfocus="selectCategory()" placeholder="Procure jogos aqui">
				<i class="search icon"></i>
			</div>
			<div class="results"></div>
		</div> -->

		<!-- Dados de login -->

		<!-- classe login data -->
		<div class="login-data">
			<div class="ui accordion">
				<div class="title active">
					<img class="ui avatar image" src='profileimg/<?php echo $_SESSION['hally']?>' >
					<strong style="text-transform: uppercase;">
						<?php echo $_SESSION['login_user']; ?>
					</strong>
				</div>
				<div class="content">
					<p class="transition hidden">
						<a style="color: blue" href="#profileUser" rel="modal:open">
							<i class="user icon"></i>
							Perfil
						</a>
					</p>
					<p class="transition hidden">
						<a style="color: black;" href="#creators" rel="modal:open">
							<i class="briefcase icon"></i>
							Criadores
						</a>
					</p>
					<p class="transition hidden">
						<a style="color:green" href="#deposit" rel="modal:open" >
							<i class="money icon"></i>
							Depositar
						</a>
					</p>
					<p class="transition hidden">
						<a style="color: red;" href="logout/logout.php" >
							<i class="paper plane icon"></i>
							Logout
						</a>
					</p>
					<!-- It doesn't work yet -->
					<p class="transition hidden">
						<a style="color: darkred" href="#modaldelete" rel="modal:open">
							<i class="close icon"></i>
							Apagar Conta
						</a>
					</p>
				</div>
			</div>
		</div>

		<!-- Auto Scroll to Sections -->

		<div id="modaldelete" class="modal">
			<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
				<p>Você tem certeza? Esta ação não pode ser revertida</p>
				<button href="#" class="ui red button" style="transform: translate(100%);" name="btnClose" rel="modal:close">
					<i class="close icon"></i>Apagar conta
				</button>
			</form>
		</div>

		<div class="sideMenuCategory">
			<h3>Menu</h3>
			<div class="open-close-element" onclick="openSideMenu();">
				<i class="angle right icon" style="font-size: 50px;"></i>
			</div>
			<div class="ui one column grid">
				<div class="row">

					<div class="column" style="cursor: pointer;"  onclick="scrollToSection('adventure')">
						<span>Aventura</span>
					</div>

					<div class="column" style="cursor: pointer;" onclick="scrollToSection('horror')">
						<span>Terror</span>
					</div>

					<div class="column" style="cursor: pointer;" onclick="scrollToSection('puzzle')">
						<span>Puzzle</span>
					</div>

					<div class="column" style="cursor: pointer;" onclick="scrollToSection('racing')">
						<span>Corrida</span>
					</div>

					<div class="column" style="cursor: pointer;" onclick="scrollToSection('sports')">
						<span>Esportes</span>
					</div>

					<div class="column" style="cursor:pointer" onclick="scrollToSection('simulator')">
						<span>Simulador</span>
					</div>
				</div>
			</div>
		</div>


	</header>
	<!-- Divisor de conteudo -->
	<div class="hidden-content"></div>

	<div class="ui horizontal divider">
		<p style="color:white;" id="adventure" class="categorys">Aventura</p>
	</div>

	<section>
		<!-- HORIZON ZERO DAWN -->
		<div class="ui cards">
			<div class="card">
				<div class="ui image">
					<img src="covers/aventura/hzd.jpg">
				</div>
				<div class="content">
					<div class="header" id="hzd">Horizon Zero Dawn</div>
					<div class="description">
						Horizon Zero Dawn™ é um RPG de aventura e ação vencedor de vários prêmios – e esta Edição Completa inclui a expansão The Frozen Wilds, com novos territórios e novas habilidades, armas e Máquinas.
					</div>
				</div>
				<div class="ui vertical animated green button" onclick="callHorizon()" tabindex="0">
					<div class="hidden content" onclick="callHorizon()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 40,99
					</div>
				</div>
			</div>
			<!-- LIFE IS STRANGE -->
			<div class="card">
				<div class="ui image">
					<img src="covers/aventura/lis.jpg">
				</div>
				<div class="content">
					<div class="header">Life is Strange</div>
					<div class="description">
						Life is Strange é uma premiada aventura em episódios, aclamada pela crítica, que permite ao jogador voltar no tempo e alterar passado, presente e futuro. Siga a história de Max Caulfield, uma estudante de fotografia que descobre ser capaz de rebobinar o tempo ao salvar a melhor amiga, Chloe Price.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callLife()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 35,00
					</div>
				</div>
			</div>
			<!-- SHADOW OF THE COLOSSUS -->
			<div class="card">
				<div class="ui image">
					<img src="covers/aventura/sotc.jpg">
				</div>
				<div class="content">
					<div class="header">Shadow of the Colossus</div>
					<div class="description">
						Shadow of the Colossus, lançado no Japão como Wander and the Colossus é um jogo eletrônico de ação-aventura desenvolvido pela SCE Japan Studio e publicado pela Sony Computer Entertainment para o PlayStation 2. O jogo foi lançado na América do Norte e no Japão em outubro de 2005 e em territórios PAL em fevereiro de 2006.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callColossus()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 150,99
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Divisor de conteudo -->
	<div class="ui horizontal divider">
		<p style="color:white;" id="horror" class="categorys">Terror</p>
	</div>

	<section>
		<!-- BLAIR WITCH -->
		<div class="ui cards">
			<div class="card">
				<div class="ui image">
					<img src="covers/terror/bw.jpg">
				</div>
				<div class="content">
					<div class="header">Blair Witch</div>
					<div class="description">
						O ano é 1996. Um menino desaparece na Floresta Black Hills, perto de Burkittsville, no estado americano de Maryland. Você interpreta Ellis, um ex-policial com um passado conturbado, que participa da busca pela floresta. O que começa como uma simples investigação logo torna-se um pesadelo sem fim, tendo de enfrentar seus medos e a Bruxa de Blair, uma força misteriosa que assombra os bosques...
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callWitch()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 90,00
					</div>
				</div>
			</div>
			<!-- DEAD SPACE 3 -->
			<div class="card">
				<div class="ui image">
					<img src="covers/terror/ds3.jpg">
				</div>
				<div class="content">
					<div class="header">Dead Space 3</div>
					<div class="description">
						Viaje pelo espaço até o planeta gelado de Tau Volantis com Isaac Clarke e o sargento John Carver para encontrar e destruir a fonte do surto Necromorph. Vasculhe o ambiente hostil em busca de materiais brutos e recolha peças para criar as armas e ferramentas de sobrevivência definitivas – vai precisar delas se Isaac e Carver quiserem sair vivos do planeta. E os Necromorphs são apenas um dos muitos inimigos que vai enfrentar desta vez.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callDeadSpace()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 32,00
					</div>
				</div>
			</div>
			<!-- RESIDENT EVIL 7 -->
			<div class="card">
				<div class="ui image">
					<img src="covers/terror/re7.jpg">
				</div>
				<div class="content">
					<div class="header">Resident Evil 7</div>
					<div class="description">
						Resident Evil 7 biohazard é o próximo grande lançamento da renomada série Resident Evil e cria um novo curso para a franquia ao trazer à tona suas raízes e abrir a porta pra uma experiência de horror realmente aterrorizante. Uma mudança dramática na série para uma visão em primeira pessoa em um estilo fotorrealista, gerido pelo novo RE Engine da Capcom, Resident Evil 7 traz um nível de imersão sem precedentes que torna a trama de horror mais próxima e pessoal.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callRE()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 112,00
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Divisor de conteudo -->
	<div class="ui horizontal divider">
		<p style="color:white;" id="puzzle"  class="categorys">Quebra-Cabeça</p>
	</div>

	<section>
		<!-- TETRIS ULTIMATE -->
		<div class="ui cards">
			<div class="card">
				<div class="ui image">
					<img src="covers/quebra-cabeca/tu.jpg">
				</div>
				<div class="content">
					<div class="header">Tetris Ultimate</div>
					<div class="description">
						O jogo de quebra-cabeça mais adorado do mundo chega aos consoles da nova geração, e está melhor do que nunca, em Tetris Ultimate. Com seis modos incríveis, novos recursos divertidos e gráficos exclusivos, a evolução desse jogo icônico só podia se realizar nos consoles da nova geração.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callTetris()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 100,00
					</div>
				</div>
			</div>
			<!-- TANGRAM -->
			<div class="card">
				<div class="ui image">
					<img src="covers/quebra-cabeca/tangram.jpg">
				</div>
				<div class="content">
					<div class="header">Tangram</div>
					<div class="description">
						O Tangram é um quebra-cabeças geométrico chinês formado por 7 peças, chamadas tans: são 2 triângulos grandes, 2 pequenos, 1 médio, 1 quadrado e 1 paralelogramo. Utilizando todas essas peças sem sobrepô-las, podemos formar várias figuras. Segundo a Enciclopédia do Tangram é possível montar mais de 5000 figuras.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callTangram()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 60,00
					</div>
				</div>
			</div>

			<div class="card">
				<div class="ui image">
					<img src="covers/quebra-cabeca/tr.jpg">
				</div>
				<div class="content">
					<div class="header">The Room</div>
					<div class="description">
						Caia num mundo de engenhocas bizarras e máquinas alquímicas com The Room, o quebra-cabeça 3D vencedor do BAFTA, produzido pela Fireproof Games. Siga um rastro de cartas enigmáticas e resolva muitos dispositivos únicos em lugares ainda mais extraordinários, em uma viagem através do tempo em que a máquina encontra o mito.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callRoom()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 69,99
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Divisor de conteudo -->
	<div class="ui horizontal divider">
		<p style="color:white;" id="racing"  class="categorys">Corrida</p>
	</div>

	<section>
		<!-- NEED FOR SPEED -->
		<div class="ui cards">
			<div class="card">
				<div class="ui image">
					<img src="covers/corrida/speed.jpg">
				</div>
				<div class="content">
					<div class="header">Need for Speed</div>
					<div class="description">
						Tudo pronto para dominar as ruas? Sente-se atrás do volante de carros icônicos e acelera por Ventura Bay, uma grande área urbana. Explore histórias interconectadas à medida que constrói sua reputação – e seu carro dos sonhos – e se torna um dos maiores ícones de corrida. Jogue de novo e de novo porque, desta vez, você tem 5 maneiras diferentes de vencer.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callNeedSpeed()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 180,00
					</div>
				</div>
			</div>
			<!-- ASPHALT -->
			<div class="card">
				<div class="ui image">
					<img src="covers/corrida/a8.jpg">
				</div>
				<div class="content">
					<div class="header">Asphalt 8: Airborne</div>
					<div class="description">
						Satisfaça sua sede de corrida e competição e mostre que não veio a passeio em Asphalt 8: +290 veículos de luxo licenciados, corridas cheias de ação, +75 pistas, jogabilidade online e off-line. Esta simulação de corrida de competição traz modos solo e multijogador e muitas outras oportunidades de derrapar no asfalto da estrada.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callAsphalt()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 55,00
					</div>
				</div>
			</div>
			<!-- THE CREW 2 -->
			<div class="card">
				<div class="ui image">
					<img src="covers/corrida/tc2.jpg">
				</div>
				<div class="content">
					<div class="header">The Crew 2</div>
					<div class="description">
						O The Crew® 2 é o mais recente capítulo desta série revolucionária e capta todas as emoções dos desportos motorizados americanos num dos mundos abertos mais empolgantes de sempre. Bem-vindo à Motornation, um recreio enorme, variado, belo e repleto de ação construído para os desportos motorizados e que atravessa os EUA. Desfruta de uma liberdade sem limites em terra, mar e ar.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callCrew()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 55,89
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<!-- Divisor de conteudo -->
		<div class="ui horizontal divider">
			<p style="color:white;" id="sports"  class="categorys">Esportes</p>
		</div>

		<!-- FIFA 16 -->
		<div class="ui cards">
			<div class="card">
				<div class="ui image">
					<img src="covers/esportes/ff16.jpg">
				</div>
				<div class="content">
					<div class="header">Fifa 16</div>
					<div class="description">
						Crie mais momentos mágicos do que nunca com o FIFA 16. Deixe todas as partidas memoráveis com controle aprimorado no meio-campo, movimentos melhorados na defesa, mais estrelas e uma nova maneira de jogar. Monte seu time dos sonhos no FIFA Ultimate Team ou dispute com uma das 12 seleções femininas, pela primeira vez na série FIFA, incluindo Brasil, Alemanha, EUA, França, Suécia, Inglaterra e outros.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callFifa()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 140,00
					</div>
				</div>
			</div>
			<!-- PES 19 -->
			<div class="card">
				<div class="ui image">
					<img src="covers/esportes/pes.jpg">
				</div>
				<div class="content">
					<div class="header">Pro Evolution Soccer 2019</div>
					<div class="description">
						'O Poder Do Futebol' é a principal mensagem que engloba todas as novidades que estão chegando no PES 2019, o que ocorre graças ao compromisso de lançar a nova versão exclusivamente para os consoles da atual geração. Isso permite que o PES recrie o futebol de uma forma nunca antes vista, dando suporte para a tecnologia 4K HDR em todas as plataformas e oferecendo recursos visuais e movimentos totalmente realistas.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 200,00
					</div>
				</div>
			</div>
			<!-- ROCKET LEAGUE -->
			<div class="card">
				<div class="ui image">
					<img src="covers/esportes/rl.jpg">
				</div>
				<div class="content">
					<div class="header">Rocket League</div>
					<div class="description">
						Rocket League mistura carros de corrida e futebol em arenas fechadas. Com modos online e offline, o game virou uma febre entre os jogadores por ser divertido e fácil de jogar.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callRocket()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 25,00
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<!-- Divisor de conteudo -->
		<div class="ui horizontal divider">
			<p style="color:white;" id="simulator"  class="categorys">Simulador</p>
		</div>

		<!-- FIFA 16 -->
		<div class="ui cards">
			<div class="card">
				<div class="ui image">
					<img src="covers/simulador/fs.jpg">
				</div>
				<div class="content">
					<div class="header">Microsoft Flight Simulator</div>
					<div class="description">
						Crie mais momentos mágicos do que nunca com o FIFA 16. Deixe todas as partidas memoráveis com controle aprimorado no meio-campo, movimentos melhorados na defesa, mais estrelas e uma nova maneira de jogar. Monte seu time dos sonhos no FIFA Ultimate Team ou dispute com uma das 12 seleções femininas, pela primeira vez na série FIFA, incluindo Brasil, Alemanha, EUA, França, Suécia, Inglaterra e outros.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callFlight()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 135,00
					</div>
				</div>
			</div>
			<!-- PES 19 -->
			<div class="card">
				<div class="ui image">
					<img src="covers/simulador/arma.jpg">
				</div>
				<div class="content">
					<div class="header">Arma 3</div>
					<div class="description">
						Experimente uma verdadeira jogabilidade de combate em um mundo aberto militar de multijogador. Com uma enorme variedade de conteúdo para um ou mais jogadores, mais de 20 veículos e 40 armas, além de oportunidades ilimitadas de criação de conteúdo, esse é um dos melhores jogos militares para PC. Autêntico, diverso, aberto - o Arma 3 envia você para a guerra.

					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callArma()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 99,99
					</div>
				</div>
			</div>
			<!-- ROCKET LEAGUE -->
			<div class="card">
				<div class="ui image">
					<img src="covers/simulador/cs.jpg">
				</div>
				<div class="content">
					<div class="header">Cities: Skylines</div>
					<div class="description">
						Cities: Skylines é uma versão moderna dos simuladores de cidade clássicos. O jogo introduz novos elementos de jogabilidade para que você sinta a emoção e a dificuldade de criar e manter uma cidade de verdade, além de aprimorar os elementos clássicos da construção de cidades.
					</div>
				</div>
				<div class="ui vertical animated green button" tabindex="0">
					<div class="hidden content" onclick="callSkylines()">
						<i class="shop icon"></i>
					</div>
					<div class="visible content">
						R$ 46,00
					</div>
				</div>
			</div>
		</div>
	</section>

	
	


	<!-- BOTÃO DE TOPO -->
	<section>
		<a class="paraotopo" href="#"> <i class="fas fa-arrow-up"></i> </a> <!-- POR ALGUM OUTRO MOTIVO O BOTÃO "PARA O TOPO" SÓ FUNCIONA SE EU USAR ISSO!-->
	</section>

	<!-- Codigo FOOTER -->
	<div class="ui inverted vertical footer segment">
		<div class="ui container">
			All Copyrights Reserved <i class="copyright icon"></i>
		</div>
	</div>


	<!-- Add funds modal -->
	<div id="deposit" class="modal">
		<form class="ui form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
			<div class="ui input focus">
				<input type="text" id="money" name="usermoney" placeholder="0.000.000">
			</div>
			<div style="margin-top: 20px;">
				<button type="submit" class="ui green button" name="funds">
					Depositar
				</button>
			</div>
			
		</form>
		
	</div>
	
	<!-- Show profile Modal -->
	<div id="profileUser" class="modal">
		<div>
			<header>
				<div id="wallet">
					R$
					<?php if(empty($_SESSION['money'])){echo"0.00";}else{echo $_SESSION['money'];}  ?>
				</div>
			</header>
			<div>
				<img src="profileimg/<?php echo $_SESSION['hally'] ?>"  style="height: 130px;">
				<br>
				<?php echo "<strong style='text-transform:uppercase';>" . $_SESSION['login_user'] . "</strong>" ; ?>
			</div>
			<div id="user-status-profile">
				<?php echo $_SESSION['user_bio'] ?>
			</div>
			<div>
				<form class="ui form" method="POST" action="<?php $_SERVER['PHP_SELF']?>">
					<div>
						<div class="field">
							<textarea rows="2" name="user_bio" placeholder="Digite uma pequena descrição"></textarea>
						</div>
						<button class="ui green button" type="submit" name="addBio">Adicionar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Creators modal -->
	<div id="creators" class="modal">
		<div id="mov">
			<div class="ui link cards">
				<div class="card">
					<div class="image">
						<img src="creatorsimg/cartoonme.jpg">
					</div>
					<div class="content">
						<div class="header">Hallysson Alexandre</div>
						<div class="meta">
							<a>Desenvolvedor PHP</a>
						</div>
						<div class="description">
							Neste momento devo estar desenvolvendo algo... Aguarda ae que ja te mostro
						</div>
					</div>
					<div class="extra content">
						<span class="right floated">
							Começou em 2016
						</span>
						<span>
							<i class="user icon"></i>
						</span>
					</div>
				</div>	
			</div>
		</div>






		<!-- jquery -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>

		<!-- mask plugin -->
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-mask-plugin@1.14.16/dist/jquery.mask.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('.#money').mask('000.000.00', {reverse: true});
			});
		</script>

		<script type="text/javascript">
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
			}
		</script>
		<!-- framework semantic -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
		<script type="text/javascript">

			$(function(){
				$(".menu a").on('click',function(){
					$("html, body").animate({
						scrollTop:$($.attr(this,'href')).offset().top
			}, 500); //500 = 1 second
				});
			});
		</script>

		<!-- money money insert success -->

		<script type="text/javascript">
			$('.mini.modal').modal('show');
		</script>
		<script src="https://cdn.jsdelivr.net/npm/sweet-modal@1.3.2/dist/min/jquery.sweet-modal.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
		<script type="text/javascript" src="../js/script.js"></script>
	</body>
	</html>
