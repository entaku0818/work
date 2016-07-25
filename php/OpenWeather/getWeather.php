<<<<<<< HEAD
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


<<<<<<< HEAD


        return $weather;
}

=======
print get_weather();
=======
        $weather = json_decode(file_get_contents($url), true);
        $icon = "http://openweathermap.org/img/w/" . $weather['weather'][0]['icon'] . ".png";

return sprintf( $weather['weather'][0]['main'], $weather['weather'][0]['description'], $icon, $weather['main']['temp'], $weather['main']['humidity'], $weather['wind']['speed']);
}

>>>>>>> 61dc600a6515653b2908621a8bbeb623bc171c08
>>>>>>> 619dd94b78ba6b883e54ba36539298621cf7eb93
 ?>
