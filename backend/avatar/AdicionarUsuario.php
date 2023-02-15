<?php
include_once('../avatar/Controller/ControllerUsuario.php');
include('../avatar/Model/ModelUsuario.php');

$usuario = new ControllerUsuario();
$model= new ModelUsuario();


$model->setNome($_POST['nome']);
$model->setEndereco($_POST['endereco']);
$model->setCpf($_POST['cpf']);
$model->setDocumento($_POST['documento']);
$model->setDataNascimento(date("Y-m-d", strtotime($_POST['dataNascimento'])));
$model->setFiliacao($_POST['filiacao']);
$model->setTelefone($_POST['telefone']);
$model->setEmail($_POST['email']);
$model->setGenero($_POST['genero']);

$usuario->adicionarUsuarioController($model);

?>
