<?php
require_once 'getWeather.php'; //関数呼び出しより手前に記述する
$weather = get_weather();
print $weather;
?>
