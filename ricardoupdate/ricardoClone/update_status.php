<?php
// update_status.php
session_start();
include 'connection/connection.php';

if (isset($_SESSION['user_id']) && isset($_POST['status'])) {
    $user_id = $_SESSION['user_id'];
    $status = $_POST['status'];

    // Sanitize the status input (if you expect specific statuses, use a whitelist approach)
    $valid_statuses = ['online', 'offline', 'active', 'inactive'];
    
    if (!in_array($status, $valid_statuses)) {
        echo "Error: Invalid status provided.";
        exit();
    }

    try {
        // Update the user's status in the database
        $update_stmt = $pdo->prepare("UPDATE users SET status = ? WHERE id = ?");
        if ($update_stmt->execute([$status, $user_id])) {
            echo "Status updated successfully.";
        } else {
            echo "Error: Unable to update status.";
        }
    } catch (PDOException $e) {
        // Display the error message if the update fails
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Error: User ID or status not found.";
}
?>

