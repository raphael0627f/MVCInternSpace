<?php
class Auth{
    public function authenticate($row){
        $_SESSION['aluno']=$row;
    }
    public function logout (){
        if(isset($_SESSION['aluno'])){
           unset($_SESSION['aluno']);
        }
    }
    public function loggedin(){
        if(isset($_SESSION['aluno'])){
            return true;
        }
        return false;
    }

}


?>