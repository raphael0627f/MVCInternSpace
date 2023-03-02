<?php


class conn {
  private $servername = "app.riaambrasil.org.br";
  private $username = "etpc";
  private $password = "etpc1234@";
  private $dbname = "capacitar";
  protected $conn;

  function __construct() {
      $this->connectDatabase();
  }

  function connectDatabase() {
      try {
          $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
      }
  }
}

?>