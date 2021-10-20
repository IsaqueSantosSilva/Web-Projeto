<?php 
	class UserDelete{

		public $pdo;

		function __construct(){
			$this->pdo = new PDO("mysql:host=localhost;dbname=loja",'root','');
		}
		
		public function selectCurrentUser(){
			$currentUser = $_SESSION['login_user'];

			$sql = "SELECT name FROM loja.register WHERE name = '$currentUser' ";
			$roll = $this->pdo->prepare($sql);
			$roll->execute();
			$row = $roll->fetch(PDO::FETCH_ASSOC);
			$_SESSION['deletedUser'] = $row['name'];
		}

		public function deleteCurrentUser(){
			$this->selectCurrentUser();
			$userDeleted = $_SESSION['deletedUser'];
			$query = "DELETE FROM loja.register WHERE name = '$userDeleted' ";
			$exquery = $this->pdo->prepare($query);
			if ($exquery->execute()) {
				echo "Sua conta foi apagada com sucesso";
				header("Location:../register/index.php");
			}
			
		}

	}
 ?>