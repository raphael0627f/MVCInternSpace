<?php
include("../login/Controller/ControllerLogin.php");
include_once("../login/Model/ModelLogin.php");

$login = new ControllerLogin();
$Modellogin = new ModelLogin();

$Modellogin->setEmail($_POST['email']);
$Modellogin->setSenha(md5($_POST['senha']));


$login->adicionarLoginController($Modellogin);








?>
