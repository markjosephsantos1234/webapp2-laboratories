<?php

$host = "localhost"; // My Localhost name
$db = "student_name"; // My database name
$user = "root"; // My sql user
$password = ""; // Password

$dsn = "mysql:host=$host; dbname=$db;charset=UTF8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, $user, $password, $options);

    if($pdo){
        echo "Connected to the $db database successfully";
    }

} catch (PDOException $e) {
    echo $e->getMessage(Overthink);}
    
?>