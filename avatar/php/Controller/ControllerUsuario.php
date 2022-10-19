<?php
require_once('../DAO/UsuarioDAO.php');
class ControllerUsuario{
    
    function adicionarUsuarioController(ModelUsuario $usuario){
        
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->adicionarUsuario($usuario);
    }


}


?>