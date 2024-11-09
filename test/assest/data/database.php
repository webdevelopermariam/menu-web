<?php
$dsn = "mysql:host=localhost;dbname=my 1st database";
$dbusername="root";
$dbpassowrd="";
try {
    $pdo= new PDO($dsn,$dbusername,$dbpassowrd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e) {
    echo "Connection faild:" . $e->getMessage();

}

