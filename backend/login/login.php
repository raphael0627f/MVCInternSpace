<?php
include_once('../../database/config.php');

$email=$_POST['email'];
$senha=$_POST['senha'];

$stmt = $conn->prepare("INSERT INTO tb_login_teste (email, senha) VALUES (:email, :senha)");
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha',$senha);
$stmt->execute();

if($stmt == true){
    echo "Dados inseridos!";
}


?>
