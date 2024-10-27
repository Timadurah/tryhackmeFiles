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

    $user_id = $_SESSION['user_id'];  // Retrieve user_id from the session
    $iban = $_POST['iban'];  // Get the IBAN from the POST request

    // Validate the IBAN (basic validation)
    // if (empty($iban) || !preg_match('/^[A-Z0-9]+$/', $iban)) {
    //     echo "Error: Invalid IBAN format.";
    //     exit();
    // }

    try {
        // Prepare and execute the SQL statement to update the IBAN for the specific user
        $stmt = $pdo->prepare("UPDATE users SET iban=? WHERE id=?");
        if ($stmt->execute([$iban, $user_id])) {
            // Redirect to the next step (payment page)
            // header('Location: ./payment/payment.php');
            // exit();
        } else {
            // Handle errors during the SQL execution
            echo "Error: Unable to update IBAN.";
        }
    } catch (PDOException $e) {
        // Handle any potential PDO errors
        echo "Database Error: " . $e->getMessage();
    }
}
?>
