<?php
header('Content-Type: application/json');

$city = $_GET['city'] ?? null;
$lat  = $_GET['lat'] ?? null;
$lon  = $_GET['lon'] ?? null;

// Валидация
if (!$city && (!$lat || !$lon)) {
    http_response_code(400);
    echo json_encode(['error' => 'Не указаны параметры city или lat/lon']);
    exit;
}

if ($city === 'Warsaw') {
    $lat = 52.23;
    $lon = 21.01;
}

// URL Open-Meteo
$url = "https://api.open-meteo.com/v1/forecast?latitude=$lat&longitude=$lon&hourly=temperature_2m";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 3); 

$response = curl_exec($ch);
$err = curl_error($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($err) {
    http_response_code(503);
    echo json_encode(['error' => 'Timeout или недоступен Open-Meteo']);
    exit;
}

if ($http_code >= 500) {
    http_response_code(502);
    echo json_encode(['error' => 'Ошибка на стороне Open-Meteo']);
    exit;
}

$data = json_decode($response, true);

$forecast = array_slice($data['hourly']['temperature_2m'], 0, 6);

$result = [
    'lat' => $data['latitude'],
    'lon' => $data['longitude'],
    'temperature_now' => $forecast[0],
    'forecast' => $forecast
];

echo json_encode($result);
