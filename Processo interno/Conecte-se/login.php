<?php
include_once('config.php');

$email=$_POST["email"];
$password=$_POST["senha"];


$stmt = $conn->prepare("INSERT INTO tb_login VALUES (:email	,:senha ");
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha',$senha);
$stmt->execute();






?>
