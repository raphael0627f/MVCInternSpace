<?php

class Login extends Controller{
    function index(){
        $errors = array();

        $this->view('login',[
        'errors'=>$errors,
    ]);
    }
}


?>