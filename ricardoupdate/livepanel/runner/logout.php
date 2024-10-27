<?php
session_start();

// Destroy the session
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session

// Redirect to index.php (login page)
header('Location: ../index.php');
exit;
?>