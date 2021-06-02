<?php

class UserMoney
{
  private $usermoney;
  public $pdo;

  function __construct()
  {
    $this->pdo = new PDO("mysql:host=localhost;dbname=loja",'root','');
    $this->usermoney = $_POST['usermoney'];
  }

  
  public function verifyMoney(){
    $query = "SELECT wallet FROM loja.register";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row['wallet'] > 0 ) {
      $soma = $row['wallet'] + $this->usermoney;
      $this->updateMoney($soma);

    }
  }


  public function updateMoney($valor){
    $nmn = $_SESSION['login_user'];
    $sqlq = "UPDATE loja.register SET wallet = $valor WHERE name = '$nmn' ";
    $srs = $this->pdo->prepare($sqlq);
    $srs->execute();
    
    $_SESSION['mahmoney'] = $valor;
  }



}

?>
