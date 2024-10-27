<?php
session_start();

// Include the connection file
include '../connection/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure user_id is retrieved from the session
    if (!isset($_SESSION['user_id'])) {
        echo "Error: User ID not found in session.";
        exit();
    }
    $user_id = $_SESSION['user_id'];

    // Sanitize and validate input data
    $vorname = trim($_POST['vorname']);
    $nachname = trim($_POST['nachname']);
    $geburtsdatum = trim($_POST['geburtsdatum']);
    $strasse_nr = trim($_POST['strasse']);
    $plz = trim($_POST['plz']);
    $ort = trim($_POST['ort']);
    $handynummer = trim($_POST['handynummer']);

    // Validate required fields
    if (empty($vorname) || empty($nachname) || empty($geburtsdatum) || empty($strasse_nr) || empty($plz) || empty($ort) || empty($handynummer)) {
        echo "Error: All form fields must be completed.";
        exit();
    }
 // Validate 'plz' (Postal code) to ensure it is a numeric value
    // if (!is_numeric($plz)) {
    //     echo "Error: Invalid postal code. It must be numeric.";
    //     exit();
    // }

    // Prepare and execute the SQL statement to update the user record
    $stmt = $pdo->prepare("UPDATE users SET 
        vorname = ?, 
        nachname = ?, 
        geburtsdatum = ?, 
        strasse_nr = ?, 
        plz = ?, 
        ort = ?, 
        handynummer = ? 
        WHERE id = ?");

    // Execute the statement with the sanitized input values
    if ($stmt->execute([$vorname, $nachname, $geburtsdatum, $strasse_nr, $plz, $ort, $handynummer, $user_id])) {
        // Redirect to the IBAN page after successful update
    } else {
        // Display the error message if something went wrong
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
