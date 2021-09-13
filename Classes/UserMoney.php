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
    $nmn = $_SESSION['login_user'];
    $query = "SELECT wallet FROM loja.register WHERE name = '$nmn'";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row['wallet'] >= 0 ) {
      $soma = $row['wallet'] + $this->usermoney;
      $this->updateMoney($soma);
    }
  }



  public function updateMoney($valor){
    $nmn = $_SESSION['login_user'];
    $sqlq = "UPDATE loja.register SET wallet = $valor WHERE name = '$nmn' ";
    $srs = $this->pdo->prepare($sqlq);
    $srs->execute();

    $this->showMoney();
  }

  public function showMoney(){
    $nmn = $_SESSION['login_user'];
    $quer = "SELECT wallet FROM loja.register WHERE name = '$nmn' ";
    $q = $this->pdo->prepare($quer);
    $q->execute();
    $row = $q->fetch(PDO::FETCH_ASSOC);
    $_SESSION['money'] = $row['wallet'];
  }



}

?>
