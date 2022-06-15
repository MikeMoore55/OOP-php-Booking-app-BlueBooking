<?php

function calcCosts($amountOfDays, $hotelRate){
    $totalCosts = $amountOfDays * $hotelRate;
    
    return $totalCosts;
}

?>