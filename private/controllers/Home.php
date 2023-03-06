<?php

class Home extends Controller{
    function index(){
        if(!Auth::loggedin()){
            $this->redirect('login');
        }


        $aluno = new Aluno();

        $data = $aluno->findAll();
        
        $this->view('home', ['rows'=>$data]);    
    }
}


?>