<?php
class Weather{
        public $weather;
        public $weather_detail;
        public $icon_url;
        public $temp;
        public $humidity;
        
        
        function getWeather() {
            return $this->weather;
        }

        function getWeather_detail() {
            return $this->weather_detail;
        }

        function getIcon_url() {
            return $this->icon_url;
        }

        function getTemp() {
            return $this->temp;
        }

        function getHumidity() {
            return $this->humidity;
        }

        function setWeather($weather) {
            $this->weather = $weather;
        }

        function setWeather_detail($weather_detail) {
            $this->weather_detail = $weather_detail;
        }

        function setIcon_url($icon_url) {
            $this->icon_url = $icon_url;
        }

        function setTemp($temp) {
            $this->temp = $temp;
        }

        function setHumidity($humidity) {
            $this->humidity = $humidity;
        }


}


?>
