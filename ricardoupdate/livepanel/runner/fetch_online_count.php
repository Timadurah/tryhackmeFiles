<?php
require 'connection.php'; // Include your database connection

try {
    // Prepare and execute the SQL statement to count users with status 'online'
    $stmt = $pdo->prepare("SELECT COUNT(*) as online_count FROM users WHERE status = 'online'");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Print the total number of online users
    echo $result['online_count'];
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
