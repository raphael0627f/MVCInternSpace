<?php
$host = "localhost";
$password = "";
$user = "root";
$db = "bdprojetocapacitar";
$connection = mysqli_connect($host,$user,$password,$db);

$email = $_POST['email'];
$password = sha1($_POST['senha']);

$email = mysqli_escape_string($connection,$email);
$sql = "SELECT email,senha from tb_email WHERE email='$email';";

$login = mysqli_query($connection,$sql);
$dados = mysqli_fetch_array($login);

 if($dados == true){
     echo $dados['senha'];
 }






?>