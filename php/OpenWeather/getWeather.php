<?php

function get_weather() {
$url = 'http://api.openweathermap.org/data/2.5/forecast/city?id=1850147&APPID=fa58e3f042be023e203649f62d01f8eb&units=metric';
        $weather = json_decode(file_get_contents($url), true);
        $icon = "http://openweathermap.org/img/w/" . $weather['weather'][0]['icon'] . ".png";

return sprintf( $weather['weather'][0]['main'], $weather['weather'][0]['description'], $icon, $weather['main']['temp'], $weather['main']['humidity'], $weather['wind']['speed']);
}

 ?>
