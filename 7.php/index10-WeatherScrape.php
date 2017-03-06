<?php

    $city=$_GET['city']; /*find variable with name of "city", which is the "text type" variabl*/

    $city=str_replace(" ", "", $city); /*remove space in city name; eg: San Francisco to SanFrancisco*/

    $contents = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

    preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);

    echo $matches[1];


?>