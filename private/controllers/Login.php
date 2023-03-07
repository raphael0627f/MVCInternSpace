<?php

class Login extends Controller{
    function index(){
        $errors = array();
        if(count($_POST)>0){
            $aluno = new Aluno();
            if($row = $aluno->where('email',$_POST['email'])){
                Auth::authenticate($row);
                $this->redirect('/home');

            }else{
                $errors['email']="email ou senha invalido ";
            }
        }


        $this->view('login',[
        'errors'=>$errors,
    ]);
    }
}


?>