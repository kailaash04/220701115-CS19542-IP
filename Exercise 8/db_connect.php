<?php
$servername = "localhost";
$username = "root";  // Update with your MySQL credentials
$password = "";
$dbname = "use BankingApp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connection successful";
?>
