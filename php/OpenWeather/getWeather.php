<<<<<<< HEAD

=======
>>>>>>> 61dc600a6515653b2908621a8bbeb623bc171c08
<?php

function get_weather() {
$url = 'http://api.openweathermap.org/data/2.5/forecast/city?id=1850147&APPID=fa58e3f042be023e203649f62d01f8eb&units=metric';
<<<<<<< HEAD
                
        $weather_json = json_decode(file_get_contents($url), true);
        
        $weather_main = $weather_json["weather"][0]["main"];
        return $weather_main; 
}


print get_weather();
=======
        $weather = json_decode(file_get_contents($url), true);
        $icon = "http://openweathermap.org/img/w/" . $weather['weather'][0]['icon'] . ".png";

return sprintf( $weather['weather'][0]['main'], $weather['weather'][0]['description'], $icon, $weather['main']['temp'], $weather['main']['humidity'], $weather['wind']['speed']);
}

>>>>>>> 61dc600a6515653b2908621a8bbeb623bc171c08
 ?>
