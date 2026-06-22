<?php
$env = parse_ini_file('.env');
define('DB_HOST', $env['DB_HOST'] ?? 'localhost');
define('DB_NAME', $env['DB_NAME'] ?? 'karnain_ai');
define('DB_USER', $env['DB_USER'] ?? 'karnain_user');
define('DB_PASS', $env['DB_PASS'] ?? 'K4rn41n#2026');
define('DEFAULT_KEY', $env['OPENROUTER_DEFAULT_KEY'] ?? '');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) { http_response_code(500); die(json_encode(['error'=>'DB connection failed'])); }
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { http_response_code(200); exit; }
?>