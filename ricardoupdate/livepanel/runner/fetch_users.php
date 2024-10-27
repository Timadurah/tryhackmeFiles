<?php
require 'connection.php'; // This is your PDO connection

// Prepare and execute the query using PDO
$sql = "SELECT id, status, registered_at, vorname, nachname, email FROM users";
$stmt = $pdo->query($sql);

$users = [];

if ($stmt->rowCount() > 0) {
    // Fetch all users as an associative array
    while ($row = $stmt->fetch()) {
        // Format the date if it's valid, otherwise set it to "None"
        $row['registered_at'] = $row['registered_at'] ? date('d M Y', strtotime($row['registered_at'])) : 'None';
        
        // Add the row to the users array
        $users[] = $row;
    }
}

// Return the users as JSON
echo json_encode($users);
?>
