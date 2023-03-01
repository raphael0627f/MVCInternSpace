<?php
    $servername = "sql213.epizy.com";
    $username = "epiz_33601998";
    $password = "w2Z:s7;9BYDyi5";
    $dbname = "epiz_33601998_internspace";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'ok';
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>