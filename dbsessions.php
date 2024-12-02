<?php 
session_start();

$isLoggedIn = isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'];

$dsn = "mysql:host=localhost;dbname=yarn;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "root";

// Use PDO to connect to the database
try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>


