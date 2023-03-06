<?php

class Controller{
    public function view($view, $data = array()){
        extract($data);
        if(file_exists("../private/views/".$view.".view.php")){
           return require("../private/views/".$view.".view.php");
        }else{
            return require("../private/views/404.view.php"); 
        }
    }

    public function load_model($model){
        if(file_exists("../private/models/".ucfirst($model).".php")){
            require("../private/models/".ucfirst($model).".php");
            return $model = new $model();
        }
        return false;
    }

    public function redirect($link){
        header("Location:" . "../public/".trim($link, "/"));
        die;
    }
}


?>