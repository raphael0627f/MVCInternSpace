<?php

class Home extends Controller{
    function index(){
        $aluno = new Aluno();

        $data = $aluno->findAll();
        
        $this->view('home', ['rows'=>$data]);    
    }
}


?>