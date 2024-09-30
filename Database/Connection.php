<!-- connection to my Sql -->


<?php
// Database credentials
$host = 'localhost';  // Server hostname or IP
$username = 'root';    // MySQL username
$password = '';        // MySQL password
$database = 'my_database';  // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Close the connection
$conn->close();
?>