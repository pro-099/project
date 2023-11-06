<?php
// Start or resume the user's session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['ename'])) {
    // If they are logged in, destroy the session data
    session_destroy();
    
    // Redirect to a different page (e.g., login page) after logging out
    header("Location: login.php"); // Replace "login.php" with the actual URL of your login page
    exit();
} else {
    // If the user is not logged in, you can handle it as you see fit, such as showing a message.
    echo "You are not logged in.";
}
?>
