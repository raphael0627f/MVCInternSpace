<?php

class CadastroAluno extends Controller{
    function index(){
        $errors = [];
        if(count($_POST)>0){
            $aluno = new Aluno();
            if($aluno->validate($_POST)){
               /* 
                $arr['nome'] = $_POST['nome'];
                $arr['email'] = $_POST['email'];
                $arr['senha'] = $_POST['password'];
                $arr['dataNascimento'] = $_POST['dtnascimento'];
                $arr['genero'] = $_POST['genero'];
                $arr['telefone'] = $_POST['telefone'];
                $arr['cpf'] = $_POST['cpf'];
                $arr['documento'] = $_POST['documento'];
                $arr['cep'] = $_POST['cep'];
                $arr['logradouro'] = $_POST['logradouro'];
                $arr['numero'] = $_POST['numero'];
                $arr['complemento'] = $_POST['complemento'];
                $arr['bairro'] = $_POST['bairro'];
                $arr['cidade'] = $_POST['cidade'];
                $arr['uf'] = $_POST['uf'];*/

                $aluno->insert($_POST);

                $this->redirect('login');
            }else{
                $errors = $aluno->errors;
            }
        }

        $this->view('cadastroAluno', ['errors'=>$errors]);
    }
}

?>