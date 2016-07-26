#!/usr/local/bin/php
<?php
    use Abraham\TwitterOAuth\TwitterOAuth;

function post_tweet($message , $imageURL) {
        require_once('twitteroauth/autoload.php');
    require_once('twitteroauth/src/TwitterOAuth.php');
    require_once(dirname(__FILE__) . '/config.php');
    
    
    
    $connection = new TwitterOAuth(consumer_key, consumer_secret, access_token, access_token_secret);
   $media = $connection->upload('media/upload', ['media' => $imageURL]);
        $parameters = [
    'status' => $message,
    'media_ids' => implode(',', [$media->media_id_string])
        ];
$result = $connection->post('statuses/update', $parameters);
    var_dump($result );
}
?>



