<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'my_database';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// CREATE - Insert new record
$sql = "INSERT INTO users (username, email, password) VALUES ('JohnDoe', 'john@example.com', 'password123')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// READ - Select records
$sql = "SELECT id, username, email FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results<br>";
}

// UPDATE - Update a record
$sql = "UPDATE users SET email='newemail@example.com' WHERE id=1";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully<br>";
} else {
    echo "Error updating record: " . $conn->error;
}

// DELETE - Delete a record
$sql = "DELETE FROM users WHERE id=1";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully<br>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
