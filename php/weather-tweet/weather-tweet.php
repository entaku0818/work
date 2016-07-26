<?php


        require_once 'OpenWeather/getWeather.php'; //関数呼び出しより手前に記述する
        require_once 'twitter-bot/twitter-bot.php'; //関数呼び出しより手前に記述する
        require_once 'OpenWeather/Weather.php';; //関数呼び出しより手前に記述する

        
        $weather = get_Weather();
        $message = "天気：".$weather->getWeather() ."     天気詳細:". $weather->getWeather_detail()."     日時:". $weather->getTimestamp();


        $imageURL = $weather -> getIcon_url();

        post_tweet($message, $imageURL);



 ?>
