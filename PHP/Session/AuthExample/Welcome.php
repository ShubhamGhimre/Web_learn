<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}
?>

<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
<a href="logout.php">Logout</a>