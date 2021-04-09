<?php 
session_start();


class UserLogin{

	public $login_user;
	private $login_pwd;

	function __construct(){
		
		$this->login_user = $_SESSION['login_user'] = $_POST['login_user'];
		$this->login_pwd = $_SESSION['login_pwd'] = $_POST['login_pwd'];
	}

	public function validateLogin(){
		if ($_SESSION['login_user'] == $_SESSION['user'] && $_SESSION['login_pwd'] ==$_SESSION['pwd']) {
			header("Location: ../mainpage/index.php");
		}else{
			echo "Dados não se conferem";
		}
	}
}
?>