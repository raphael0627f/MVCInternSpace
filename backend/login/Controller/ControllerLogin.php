<?php

class ControllerLogin{
    function adicionarLoginController(ModelLogin $login){
        include('../DAO/LoginDAO.php');
        $loginDAO = new loginDAO();
        $loginDAO->adicionarLogin($login);
    }


}


?>
