<?php
include("../login/DAO/LoginDAO.php");
include_once("../login/Model/ModelLogin.php");

$login = new loginDAO();
$Modellogin = new ModelLogin();

$Modellogin->setEmail($_POST['email']);
$Modellogin->setSenha($_POST['senha']);


$login->adicionarLogin($Modellogin);

$stmt = $conn->prepare("INSERT INTO tb_login (idUsuario ,email, senha) VALUES (:idUsuario, :email, :senha)");
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha',$senha);
$stmt->execute();
$user = $stmt->fetch();

// checando se realmente está no banco de dados
echo var_dump($user);
if($email == TRUE){
    echo "Dados inseridos!";
    var_dump($user);
}
else{
    echo "";
}






?>

