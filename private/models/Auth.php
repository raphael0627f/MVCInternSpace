<?php
class Auth{
    public static function authenticate($row){
        $_SESSION['logado']=$row;
    }

    public static function logout (){
        if(isset($_SESSION['logado'])){
           unset($_SESSION['logado']);
        }
    }

    public static function loggedin(){
        if(isset($_SESSION['logado'])){
            return true;
        }
        return false;
    }

    public static function aluno(){
        if(isset($_SESSION['logado'])){
            return $_SESSION['logado']->nome;
        }
        return false;
    }

}


?>