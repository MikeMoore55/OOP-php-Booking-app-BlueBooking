<?php

function hotelOptionsArray(){

    $hotelOptions = file_get_contents("hotelList.json");
    $hotelOptions = json_decode($hotelOptions, TRUE); 

    return $hotelOptions;
}

?>