<?php
$url = 'http://api.openweathermap.org/data/2.5/forecast/city?id=1850147&APPID=fa58e3f042be023e203649f62d01f8eb&units=metric';
$weather = json_decode(file_get_contents($url), true);


echo "<pre>";
var_dump($weather);

echo "</pre>";


print $weather['list'][0]['main']['temp'];
print $weather['list'][0]['weather'][0]['main'];
print $weather['list'][0]['weather'][0]['icon'];
print $weather['list'][0]['main']['temp'];
print $weather['list'][0]['main']['temp'];


?>
