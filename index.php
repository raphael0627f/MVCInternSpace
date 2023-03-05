<?php

require_once ('../controllers/clientContorller.php');

    $controller = new clientsController;

    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';

    $controller -> {$action}();

?>