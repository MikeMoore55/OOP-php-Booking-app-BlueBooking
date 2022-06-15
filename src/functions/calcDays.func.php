<?php
    function calcDays($checkIn, $checkOut){
        $dayDifference = date_diff(date_create($checkIn), date_create($checkOut));
        $amountOfDays = $dayDifference->format('%a');

        return $amountOfDays;
    }
?>