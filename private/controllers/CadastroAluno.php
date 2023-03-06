<?php

class CadastroAluno extends Controller{
    function index(){
        $errors = array();
        if(count($_POST)>0){
            $aluno = new Aluno();
            if($aluno->validate($_POST)){
                $this->redirect('login');
            }else{
                $errors = $aluno->errors;
            }
        }

        $this->view('cadastroAluno', ['errors'=>$errors]);
    }
}

?>