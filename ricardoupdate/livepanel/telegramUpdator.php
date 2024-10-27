<?php

session_start();
require 'runner/connection.php'; // Ensure the connection.php file is correctly included

// Check if the user is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // If not logged in, redirect to index.php
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
    <style>
        /* Styles similar to your screenshot */
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

        .stats-cards {
            display: flex;
            gap: 10px;
            /* Reduce the gap between cards */
            margin-bottom: 20px;
            justify-content: space-around;
        }

        .card {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 450px;
            /* Fixed width */
            max-width: 100%;
            /* Responsive */
            margin: 10px auto;
            /* Reduced margin to minimize gaps and center the card */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            /* Optional: Add a shadow for better visual separation */

        }


        .card h3 {
            margin: 0 0 10px;
        }

        .card p {
            font-size: 24px;
            margin: 0;
        }

        .users-table {
            margin-top: 20px;
        }

        .users-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .users-table th,
        .users-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #333;
        }

        .users-table th {
            color: #ccc;
        }

        .users-table td {
            color: #fff;
        }

        .users-table tbody tr {
            background-color: #1e1e1e;
        }

        .users-table tbody tr:hover {
            background-color: #333;
        }

        .status-online {
            color: #00ff00;
            font-weight: bold;
        }

        .status-offline {
            color: #f20000;
            font-weight: bold;
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

        .badge.blue {
            background-color: #2962ff;
        }

        .badge.red {
            background-color: #d50000;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-buttons .btn {
            padding: 6px 12px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn-view {
            background-color: #536dfe;
            color: #fff;
        }

        .btn-delete {
            background-color: #ff1744;
            color: #fff;
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
                        <a href="./telegramUpdator.php">
                            <i class="icon"></i>Telegram Notification </a>
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
            <?php

            // Check if the form is submitted
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $bot_token = $_POST['bot_token'];
                $chat_id = $_POST['chat_id'];

                try {
                    // Prepare the SQL statement
                    $sql = "UPDATE telegram_config SET bot_token = :bot_token, chat_id = :chat_id WHERE id = 1"; // Assuming you want to update the first entry
                    $stmt = $pdo->prepare($sql);

                    // Bind parameters
                    $stmt->bindParam(':bot_token', $bot_token);
                    $stmt->bindParam(':chat_id', $chat_id);

                    // Execute the statement
                    if ($stmt->execute()) {
                        echo "<script>alert('Telegram configuration updated successfully!');</script>";
                    } else {
                        echo "<script>alert('Error updating configuration.');</script>";
                    }
                } catch (PDOException $e) {
                    error_log("Database error: " . $e->getMessage());
                    echo "<script>alert('Database error occurred. Please try again.');</script>";
                }
            }
            ?>


            <div class="container col-lg-4 col-10 mt-5">
                <h1 class="text-center">Update Telegram Configuration</h1>
                <br>
                <form id="updateForm" action="" method="POST">
                    <div class="form-group">
                        <label for="bot_token">Bot Token</label>
                        <input type="text" class="form-control" placeholder="Bot Token" id="bot_token" name="bot_token" required>
                    </div>
                    <div class="form-group">
                        <label for="chat_id">Chat ID(s)</label>
                        <input type="text" class="form-control" placeholder="Chat ID(s)" id="chat_id" name="chat_id" required>
                        <small class="form-text text-muted">Use comma to separate multiple chat IDs.</small>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Update Configuration</button>
                </form>
            </div>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        </main>
    </div>





</body>

</html>