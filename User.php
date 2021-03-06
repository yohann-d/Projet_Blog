<?php





class User{

protected $_email;
protected $_pass;
protected $_id_Type;

public function __construct($_email, $_pass){
  $this->_email = $_email;
  $this->_pass = $_pass;
  $this->_id_Type = $_id_Type;
}

public function getEmail(){
  return $this->_email;
}

public function getMdp(){
  return $this->_pass;
}

public function getId_Type(){
  return $this->_id_Type;
}

public function connect($bdd){
  $req = $bdd->prepare(" SELECT * FROM User WHERE email = :email AND pass = :pass ");
  $req->execute(array(
    'email' => $this->_email,
    'pass' => $this->_pass
  ));
  $count = $req->rowCount();
  if ($count > 0){
      session_start();
      $_SESSION['email']= $this->_email;
    
      header("location:index.php");
  }
  else{
      header("location:login.php?error=1");
  }
}

}
?>