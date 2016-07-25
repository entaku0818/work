#!/usr/local/bin/php
<?php
    require_once('twitteroauth/autoload.php');
    require_once('twitteroauth/src/TwitterOAuth.php');
    require_once(dirname(__FILE__) . '/config.php');
    use Abraham\TwitterOAuth\TwitterOAuth;
    
    
    require_once dirname(__FILE__) . '../OpenWeather/getWeather.php'; //関数呼び出しより手前に記述する
    
    
    $message = get_weather();
    $connection = new TwitterOAuth(consumer_key, consumer_secret, access_token, access_token_secret);
    $request = $connection->post("statuses/update", array("status"=> $message ));
    var_dump($request);
?>



