<?php

function get_weather() {
        require_once 'Weather.php'; //関数呼び出しより手前に記述する

        $url = 'http://api.openweathermap.org/data/2.5/forecast/city?id=1850147&APPID=fa58e3f042be023e203649f62d01f8eb&units=metric';
        
        /**
         * 
         */
        $weather_json = json_decode(file_get_contents($url), true);
        
        $weather = new Weather;
        $weather -> setWeather($weather_json['list'][0]['weather'][0]['main']);
        $weather -> setWeather_detail($weather_json['list'][0]['weather'][0]['description']);
        $weather -> setIcon_url("http://openweathermap.org/img/w/" . $weather_json['list'][0]['weather'][0]['icon'] . ".png");   




        return $weather;
}

 ?>
