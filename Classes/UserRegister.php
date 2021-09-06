<?php 
session_start();

class UserRegister{
	public $pdo;
	public $img;
	public $name;
	public $age;
	public $email;
	public $pwd;
	public $cpwd;

	function __construct(){
		$this->pdo = new PDO("mysql:host=localhost;dbname=loja",'root','123');
		$this->img = $_SESSION['ha'] = $_FILES['archive'];
		$this->name = $_SESSION['user'] = $_POST['username'];
		$this->age = $_SESSION['age'] = $_POST['age'];
		$this->email = $_SESSION['mail'] = $_POST['email']; 
		$this->pwd = $_SESSION['pwd'] = $_POST['pwd'];
		$this->cpwd = $_SESSION['cpwd'] = $_POST['cpwd'];
	}

	public function moveImage(){
		$target = "../mainpage/profileimg/" . $this->img['name'];
		move_uploaded_file($this->img['tmp_name'], $target);
	}


	public function validatePassword(){
		if ($this->pwd != $this->cpwd) {
			echo '
			<div class="ui basic modal" style=" display:none">
			<div class="ui icon header">
			<i class="x red icon"></i>
			Senha
			</div>
			<div class="content">
			<p>As senhas inseridas não são iguais... </p>
			</div>
			<div class="actions">
			<div class="ui green ok inverted button">
			<i class="checkmark icon"></i>
			Ok
			</div>
			</div>
			</div>';
			return;
		}else{
			$this->insertRegisterData();
		}
	}

	public function validateEmail(){
		if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
			echo '<div class="ui basic modal" style=" display:none">
			<div class="ui icon header">
			<i class="x red icon"></i>
			Email
			</div>
			<div class="content">
			<p>O Email apresentado não é válido</p>
			</div>
			<div class="actions">
			<div class="ui green ok inverted button">
			<i class="checkmark icon"></i>
			Ok
			</div>
			</div>
			</div>';
		}else{
			$this->validatePassword();
		}
	}


	public function insertRegisterData(){
		if (isset($this->img) && isset($this->name) && isset($this->age) && isset($this->email) && isset($this->pwd) && isset($this->cpwd)){
			
			$inst = $this->pdo->prepare('INSERT INTO loja.register(profileimg,name,age,email,password,c_password) VALUES(:profileimg,:name,:age,:email, :password,:c_password);');
			$inst->bindValue(':profileimg',$this->img['name']);
			$inst->bindValue(':name',$_SESSION['user']);
			$inst->bindValue(':age',$_SESSION['age']);
			$inst->bindValue(':email', $_SESSION['mail']);
			$inst->bindValue(':password',$_SESSION['pwd']);
			$inst->bindValue(':c_password', $_SESSION['cpwd']);
			$this->moveImage();

			echo '<div class="ui basic modal" style=" display:none">
			<div class="ui icon header">
			<i class="check large green icon"></i>
			Cadastrado com sucesso
			</div>
			<div class="content">
			<p>Sua conta foi criada com sucesso</p>
			</div>
			<div class="actions">
			<div class="ui green ok inverted button">
			<i class="checkmark icon"></i>
			<a href="../login/index.php" style="text-decoration:none; color: #7CFC00;">
			Fazer login
			</a>
			</div>
			</div>
			</div>';
			$inst->execute();
		}
	}

}

?>