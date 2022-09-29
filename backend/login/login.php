<?php
include_once('../../database/config.php');

$email=$_POST["email"];
$password=$_POST["senha"];
$idUsuario=00000000000;


$stmt = $conn->prepare("INSERT INTO tb_login VALUES (:idUsuario, :email	,:senha)");
$stmt->bindParam(':idUsuario',$idUsuario);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha',$senha);
$stmt->execute();






?>
