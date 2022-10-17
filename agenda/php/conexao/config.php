<?php
$servername = "app.riaambrasil.org.br";
$username = "etpc";
$password = "etpc1234@";
$dbname = "capacitar";
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
?>
