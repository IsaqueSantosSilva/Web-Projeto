<?php 

class UserBio
{
	public $bio;
	public $pdo;

	function __construct()
	{
		$this->pdo = new PDO("mysql:host=localhost;dbname=loja",'root','');
		$this->bio = $_SESSION['user_bio'] = $_POST['user_bio'];
	}


	public function addBio(){
		$bio = $_SESSION['user_bio'];
		$currentUser = $_SESSION['login_user'];
		$sql = "SELECT id_reg FROM loja.register WHERE name = '$currentUser'";
		$kaka = $this->pdo->prepare($sql);
		$kaka->execute(); 
		$row = $kaka->fetch(PDO::FETCH_ASSOC);
		$idUser = $row['id_reg'];		
		$query = "UPDATE loja.register SET user_bio = '$bio' WHERE id_reg = '$idUser' ";
		$stmt = $this->pdo->prepare($query);
		$stmt->execute();	
	}
	

}
?>