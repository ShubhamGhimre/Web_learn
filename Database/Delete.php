<?php
// Update query
$sql = "DELETE FROM user WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>
