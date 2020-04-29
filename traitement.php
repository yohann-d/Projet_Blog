<?php

require_once('include/database.php');
$connexion = new Database('localhost','User','root','root');
$bdd = $connexion->PDOConnexion();

require_once('User.php');

$email = !empty($_POST['email']) ? $_POST['email'] : NULL;
$pass = !empty($_POST['password']) ? $_POST['password'] : NULL;
$user1 = new User($email, $pass);

$req = $user1->connect($bdd);


?>
