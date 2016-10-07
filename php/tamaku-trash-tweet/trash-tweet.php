<?php


        require_once 'twitter-bot/twitter-bot.php'; //関数呼び出しより手前に記述する
        $imageURL = "/Users/endo/work/php/tamaku-trash-tweet/140314_hozon_H4_tama_asao.jpg";
        
        //曜日を取得する
        date_default_timezone_set("Asia/Tokyo");
        $datetime = new DateTime();
        $w = (int)$datetime->format('w');

        if($w == 0){
                $message = "今日のゴミは無いです";
        }elseif($w == 1){
             $message = "今日は缶/ペットボトル/ビン/電池の日です";
        }elseif($w == 2){
                $message = "今日はミックスペーパーの日です。";
        }elseif($w == 3){
                $message = "今日は普通ゴミの日です";           
        }elseif($w == 4){
                $message = "今日はプラスチックゴミの日です";
        }elseif($w == 5){
                $message = "今日のゴミは無いです";       
        }elseif($w == 6){
                $message = "今日は普通ゴミの日です";       
        }



        
        
        post_tweet($message, $imageURL);



 ?>
