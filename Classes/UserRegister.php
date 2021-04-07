<?php 
session_start();

class UserRegister{
	public $name;
	public $age;
	public $pwd;
	public $cpwd;

	function __construct(){

		$this->name = $_SESSION['user'] = $_POST['username'];
		$this->age = $_SESSION['age'] = $_POST['age'];
		$this->pwd = $_SESSION['pwd'] = $_POST['pwd'];
		$this->cpwd = $_SESSION['cpwd'] = $_POST['pwd'];
	}

	public function validatePassword(){

		if ($_SESSION['pwd'] != $_SESSION['cpwd']) {
			echo "Senhas não são iguais";
			return;
		}else{
			header("Location: ../login/index.php");
		}

	}

}
?>