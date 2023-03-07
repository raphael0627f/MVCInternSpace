<?php

class CadastroAluno extends Controller{
    function index(){

        if(!Auth::loggedin()){
            $this->redirect('login');
        }

        $errors = [];
        if(count($_POST)>0){
            $aluno = new Aluno();
            if($aluno->validate($_POST)){
                $aluno->insert($_POST);
            }else{
                $errors = $aluno->errors;
            }
        }

        $this->view('cadastroAluno', ['errors'=>$errors]);
    }
}

?>