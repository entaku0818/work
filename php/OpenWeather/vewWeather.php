    <?php
        require_once 'getWeather.php'; //関数呼び出しより手前に記述する
            echo(getWeather());
            list ($zero, $one, $two) =getWeather();
       ?>
