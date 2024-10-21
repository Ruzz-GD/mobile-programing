<?php
$host = '127.0.0.1'; 
$dbname = 'my_database';# database name 
$username = 'root';# username or root 
$password = '';# your_password    
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: Could not connect to the database. " . $e->getMessage());
}
?>
