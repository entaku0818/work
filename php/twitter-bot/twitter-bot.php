#!/usr/local/bin/php
<?php
    require_once('twitteroauth/autoload.php');
    require_once('twitteroauth/src/TwitterOAuth.php');
    require_once(dirname(__FILE__) . '/config.php');
    use Abraham\TwitterOAuth\TwitterOAuth;

    $message = "test";
    $connection = new TwitterOAuth(consumer_key, consumer_secret, access_token, access_token_secret);
    $request = $connection->post("statuses/update", array("status"=> $message ));
    var_dump($request);
?>



