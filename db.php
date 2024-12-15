<?php
// Database credentials
$servername = "localhost"; // Change this to your database server, e.g., 'localhost'
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "restaurant_db"; // Change this to your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Continue with your code, for example:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Your registration code that uses $conn
    // e.g., $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
}

?>
