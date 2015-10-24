<?php

$dsn = 'mysql:host=localhost;dbname=aulaphp';
$user = 'root';
$password = '';
try {
    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "conectado";
    
} catch (PDOException $e) {
    echo $e->getMessage();
}
