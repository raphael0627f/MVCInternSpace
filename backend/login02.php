<?php

// importando os dados
include_once('../../database/config.php');

// campo inserido pelo user
$emailInserido = $_POST['email'];
$senhaInserido = $_POST['senha'];

// db
$stmt = $conn->prepare("SELECT email FROM tb_login");
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha',$senha);
$stmt->execute();
$user = $stmt->fetch();

// checando se realmente está no banco de dados
echo var_dump($user);
if($email == $user){
    echo "Dados inseridos!";
    var_dump($user);
}
else{
    echo "";
}


?>
