<?php
include("../login/DAO/LoginDAO.php");
include_once("../login/Model/ModelLogin.php");

$login = new loginDAO();
$Modellogin = new ModelLogin();

$Modellogin->setIdUsuario($_POST['email']);






?>
