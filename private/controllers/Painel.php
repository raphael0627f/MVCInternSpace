<?php

class Painel extends Controller{
    function index(){

        if(!Auth::loggedin()){
            $this->redirect('login');
        }
        
        $this->view('painel');    
    }
}

?>