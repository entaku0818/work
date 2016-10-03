<?php


        require_once 'twitter-bot/twitter-bot.php'; //関数呼び出しより手前に記述する
        $message = "今日は燃えるゴミです";
        $imageURL = "140314_hozon_H4_tama_asao.jpg";

        post_tweet($message, $imageURL);



 ?>
