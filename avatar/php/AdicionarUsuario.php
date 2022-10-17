<?php
require_once('Controller/controllerUsuario.php');
require_once('Model/ModelUsuario.php');


$model= new ModelUsuario();

$model->setNome($_POST['nome']);
$model->setEndereco($_POST['endereco']);
$model->setCpf($_POST['cpf']);
$model->setDocumento($_POST['rg']);
$model->setFiliacao(date("Y-m-d", strtotime($_POST['dataNascimento'])));
$model->setTelefone($_POST['telefone']);
$model->setEmail($_POST['email']);
$model->setGenero($_POST['genero']);
$usuario = new ControllerUsuario();
$usuario->adicionarUsuarioController($model);

?>