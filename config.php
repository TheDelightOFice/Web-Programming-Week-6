<?php
// config.php
$host = "localhost";
$user = "root"; // Default XAMPP username
$pass = "";     // Default XAMPP password (empty)[cite: 3]
$db = "db_school";

// Initialize connection using procedural MySQLi
$conn = mysqli_connect($host, $user, $pass, $db);

// Check if connection failed
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>