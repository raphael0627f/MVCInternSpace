<?php
require_once('./configuration/conn.php');
 class clientModel extends conn {
    private $table;

    function __construct()
    {
        parent::__construct();
        $this ->table = 'tb_teste';
    }
    function getAll()
    {
        if (!$this->conn) {
            return []; // retorna um array vazio se a conexão não for estabelecida corretamente
        }
        $sqlSelect = $this->conn->query("SELECT * FROM $this->table");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }
 }


?>