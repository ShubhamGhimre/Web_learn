<?php
// Update query
$sql = "UPDATE users SET email='newemail@example.com' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>
