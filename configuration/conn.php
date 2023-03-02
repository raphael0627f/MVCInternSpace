<?php
$servername = "app.riaambrasil.org.br";
$username = "etpc";
$password = "etpc1234@";
$dbname = "capacitar";

 class conn{
   protected $conn;

   function __construct()
   {
    $this ->connectDatabase();
   }
   function connectDatabase(){
    global $servername, $username, $password, $dbname;
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "está funcionando";
 
  } catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  }
 }
}
?>