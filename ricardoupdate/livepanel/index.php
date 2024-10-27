<?php
session_start();

require 'runner/connection.php';

// Redirect if already logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: livepanel.php');
    exit;
}



// Login logic
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare a statement to prevent SQL injection
    $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    
    if ($stmt->rowCount() === 1) {
        $user = $stmt->fetch();

        // Compare the password directly as it's stored in plain text
        if ($password === $user['password']) {
            // Set session and redirect
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $user['username'];
            header('Location: livepanel.php');
            exit;
        } else {
            $error = 'Invalid username or password';
        }
    } else {
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            color: #fff;
        }

        .login-container {
            background-color: #1a1a1a;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
        }

        .login-container h2 {
            margin-bottom: 30px;
            color: #fff;
            font-size: 24px;
            text-align: center;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #ccc;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #333;
            background-color: #1e1e1e;
            border-radius: 4px;
            color: #fff;
        }

        .input-group input:focus {
            outline: none;
            border-color: #536dfe;
        }

        .error {
            color: #ff1744;
            margin-bottom: 15px;
            text-align: center;
        }

        .login-container button {
            background-color: #536dfe;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .login-container button:hover {
            background-color: #405cff;
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen">
    <div class="login-container">
        <h2>Admin Login</h2>
        <?php if (!empty($error)): ?>
            <div class="error"><?= htmlspecialchars($error); ?></div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="input-group mb-5">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="input-group mb-5">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
