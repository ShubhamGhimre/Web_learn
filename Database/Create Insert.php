<!-- insert in the database -->
 
<?php
// Insert query
$sql = "INSERT INTO users (username, email, password) VALUES ('JohnDoe', 'john@example.com', 'password123')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>