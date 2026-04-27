<?php
// db.php - Database Connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'tournament_system';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>