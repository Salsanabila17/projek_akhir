<?php
// Start session
session_start();

// Destroy all session data
session_destroy();

// Redirect user to the login page (or any other page)
header("Location: index.php");
exit();
?>
