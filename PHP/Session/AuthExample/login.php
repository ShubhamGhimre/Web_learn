<?php
// start the session
session_start();

// Simulate user login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    
    // Store username in session
    $_SESSION['username'] = $username;
    $_SESSION['loggedin'] = true;

    // Redirect to welcome page
    header("Location: welcome.php");
    exit();
}
?>

<form method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <button type="submit">Login</button>
</form>
