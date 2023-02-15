<?php

class loginDAO { 

    function adicionarLogin(ModelLogin $login){
     $user = $login->getIdUsuario();
     $email= $login->getEmail();
     $senha = $login->getSenha();

     $user=1;

        include_once("../../database/config.php");
        $stmt = $conn->prepare("INSERT INTO tb_login (idUsuario ,email, senha) VALUES (:idUsuario, :email, :senha)");
        $stmt->bindParam(':idUsuario',$user);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha',$senha);
        $stmt->execute();
        

        if($stmt == true){
            echo "Dados inseridos!";
        }
        
    }


    }
?>
