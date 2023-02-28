<?php
    $servername = "greenlight.dev.br";
    $username = "hjjyaccv";
    $password = "w2Z:s7;9BYDyi5";
    $dbname = "hjjyaccv_internspace";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'davi gay';
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>