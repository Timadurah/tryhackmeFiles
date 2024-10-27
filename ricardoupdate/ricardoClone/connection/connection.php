<?php

// Database configuration
$host = 'localhost';        // Your database host (e.g., 'localhost')
$dbname = 'user_data';  // Your database name
$username = 'root';// Your database username
$password = '';// Your database password

try {
    // Ensure that $dbname is defined and used correctly in the DSN string
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    // Display a user-friendly message if the connection fails
    die("Database connection failed: " . $e->getMessage());
}
?>
