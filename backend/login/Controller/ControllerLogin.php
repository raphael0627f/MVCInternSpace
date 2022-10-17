<?php
require_once('./DAO/LoginDAO.php');
class ControllerLogin{
    function adicionarLoginController(ModelLogin $login){
        
        $loginDAO = new loginDAO();
        $loginDAO->adicionarLogin($login);
    }


}


?>
