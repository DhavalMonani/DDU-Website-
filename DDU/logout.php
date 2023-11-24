<?php
// Start the session
session_start();

// Destroy all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to a page after logout (e.g., the login page)
header("Location: index.php");
?>
