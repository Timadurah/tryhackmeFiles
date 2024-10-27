<?php
// Include the connection file
include '../connection/connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure user_id is retrieved from the session
    if (!isset($_SESSION['user_id'])) {
        echo "Error: User ID not found in session.";
        exit();
    }

    $user_id = $_SESSION['user_id'];

    // Sanitize and validate inputs
    $cardNumber = $_POST['cardNumber'];
    $expiryMonth = $_POST['expiryMonth'];
    $expiryYear = $_POST['expiryYear'];
    $cvv = $_POST['cvv'];

   // Validation example: Check if the card number and CVV are valid
    // if (!preg_match('/^\d{16}$/', $cardNumber)) {
    //     echo "Error: Invalid card number format.";
    //     exit();
    // }
    // if (!preg_match('/^\d{3}$/', $cvv)) {
    //     echo "Error: Invalid CVV.";
    //     exit();
    // }

    // Expiry Date Validation: Check if the card is expired
    $currentYear = date('Y');
    $currentMonth = date('m');

    // if ($expiryYear < $currentYear || ($expiryYear == $currentYear && $expiryMonth < $currentMonth)) {
    //     echo "Error: The credit card is expired.";
    //     exit();
    // }

    // Prepare and execute the SQL statement to update the user record with credit card details
    $stmt = $pdo->prepare("UPDATE users SET card_number=?, expiry_month=?, expiry_year=?, cvv=? WHERE id=?");

    if ($stmt->execute([$cardNumber, $expiryMonth, $expiryYear, $cvv, $user_id])) {
        // Redirect to the payment verification page
        header('Location: ../otp/verifyotp.php');
        exit();
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}

