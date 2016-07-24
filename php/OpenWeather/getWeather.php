
<?php

function get_weather() {
$url = 'http://api.openweathermap.org/data/2.5/forecast/city?id=1850147&APPID=fa58e3f042be023e203649f62d01f8eb&units=metric';
                
        $weather_json = json_decode(file_get_contents($url), true);
        
        $weather_main = $weather_json["weather"][0]["main"];
        return $weather_main; 
}


print get_weather();
 ?>
