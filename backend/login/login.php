<?php
include("../login/DAO/LoginDAO.php");
include_once("../login/Model/ModelLogin.php");

$login = new loginDAO();
$Modellogin = new ModelLogin();

$Modellogin->setEmail($_POST['email']);


$login->adicionarLogin($Modellogin);






?>
