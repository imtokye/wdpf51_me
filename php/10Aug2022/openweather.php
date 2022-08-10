<?php
$OpenWeather = ['api_key' => '8eea277c20fba357d4dfa94c6e807bf6'];
$zip = "98109";
$lat = 23.7808875;
$lon = 90.2792371;
$base_url = "https://api.openweathermap.org/data/2.5";
$weather_url = "/weather?lat=" . $lat. "&lon=" . $lon;
$api_key = "&appid={$OpenWeather['api_key']}";
$api_url = $base_url . $weather_url . $api_key;
$weather = json_decode(file_get_contents($api_url));
echo "<pre>";
print_r($weather);
?>