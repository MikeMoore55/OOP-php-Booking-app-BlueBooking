<?php

    require("/MAMP/htdocs/OOP-php-Booking-app/src/includes/HotelInitialization.inc.php"); 
    $hotelList = json_encode($hotelListArray);
    file_put_contents("hotelList.json", $hotelList);

?>