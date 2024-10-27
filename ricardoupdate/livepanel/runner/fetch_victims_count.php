<?php
require 'connection.php'; // Ensure this file includes the correct connection logic

// Fetch the total number of victims
$countQuery = "SELECT COUNT(id) as total_victims FROM users";
$countStmt = $pdo->query($countQuery);
$totalVictims = $countStmt->fetch()['total_victims'];

// Echo only the total number of victims (no JSON format needed)
echo $totalVictims;
?>
