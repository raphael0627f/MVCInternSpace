<?php
include_once('../../database/config.php');

$email=$_POST['email'];
$senha=$_POST['senha'];
$user = 2;

$stmt = $conn->prepare("INSERT INTO tb_login (idUsuario ,email, senha) VALUES (:idUsuario, :email, :senha)");
$stmt->bindParam(':idUsuario',$user);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha',$senha);
$stmt->execute();

var_dump($user);
if($stmt == true){
    echo "Dados inseridos!";
}


?>
