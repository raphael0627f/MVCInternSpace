<?php
    require "config.php";
    require "database.php";
    require "funcoes.php";
    require "app.php";
    require "controller.php";
    require "model.php";

    spl_autoload_register(function($class_name){
        require "../private/models/".ucfirst($class_name).".php";
    })
?>