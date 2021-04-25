<?php 
include 'UserRegister.php';
session_start();


class UserLogin{
	public $pdo;
	public $login_user;
	private $login_pwd;

	function __construct(){
		$this->pdo = new PDO("mysql:host=localhost;dbname=loja",'root','');
		$this->login_user = $_SESSION['login_user'] = $_POST['login_user'];
		$this->login_pwd = $_SESSION['login_pwd'] = $_POST['login_pwd'];
	}
		
	public function validateOnlineLogin(){
		$img = $_SESSION['ha']['name'];
		$user = $_SESSION['login_user'];
		$password = $_SESSION['login_pwd'];
		
		$query = "SELECT * FROM loja.register WHERE name = '$user' and password = '$password'";
		$stmt = $this->pdo->prepare($query);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['hally'] = $row['profileimg'];

		if ($user == $row['name'] && $password == $row['password']) {
			header("Location: ../mainpage/index.php");
		}else{
			echo '<div class="ui basic modal" style=" display:none">
					<div class="ui icon header">
					<i class="x red icon"></i>
					Dados incorretos
				  </div>
				<div class="content">
					<p>Dados de login não se conferem... Verifique seus dados ou crie uma nova conta</p>
				</div>
				<div class="actions">
					<div class="ui green ok inverted button">
					<i class="checkmark icon"></i>
						Ok
					</div>
				</div>
				</div>';
		}
	}
}
?>