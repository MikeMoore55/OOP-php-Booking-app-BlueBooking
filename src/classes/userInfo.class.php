<?php


    function calcCosts($amountOfDays, $hotelRate){
        $totalCosts = $amountOfDays * $hotelRate;
        
        return $totalCosts;
    };

    function calcDays($checkIn, $checkOut){
        $dayDifference = date_diff(date_create($checkIn), date_create($checkOut));
        $amountOfDays = $dayDifference->format('%a');

        return $amountOfDays;
    };

    function fullName($name,$surname){
        $fullName = $name." ".$surname;

        return $fullName;
    };



?>