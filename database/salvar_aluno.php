<?php

    include_once('config.php');
    $nome               = $_POST['nome'];
    $endereco           = $_POST[''];
    $CPF	            = $_POST[''];
    $identidade         = $_POST[''];
    $telefone           = $_POST[''];
    $email              = $_POST[''];
    $sexo               = $_POST[''];
    $experiencia        = $_POST[''];
    $instituicao        = $_POST[''];
    $cargo              = $_POST[''];
    $periodo            = $_POST[''];
    $formacaoAcademica  = $_POST[''];
    $competencias       = $_POST[''];
    $idioma1            = $_POST[''];
    $idioma2            = $_POST[''];
    $curso              = $_POST[''];

    $stmt = $conn->prepare("INSERT INTO tb_usuarios VALUES (:setor, ");
    $stmt->bindParam(':setor', $nome);
    $stmt->execute();

    echo "Dados inseridos!";

?>



$nomeUsuario
$endereco
$CPF	
$identidade
$telefone
$email
$sexo
$experiencia
$instituicao
$cargo
$periodo
$formacaoAcademica
$competencias
$idioma1
$idioma2
$curso