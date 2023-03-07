<?php

class Login extends Controller{
    function index(){
        $errors = [];
        // a variavel $row é o aluno que foi encontrado com o email
        if(count($_POST)>0){
            $aluno = new Aluno();
            if($row = $aluno->where('email',$_POST['email'])){
                $row = $row[0];
                if(password_verify($_POST['senha'],$row->senha)){
                    Auth::authenticate($row);
                    $this->redirect('/cadastroAluno');
                }
                $errors['email'] = "LOGIN INVALIDO";
            }
        }
        $this->view('login',['errors'=>$errors,]);
    }
}


?>