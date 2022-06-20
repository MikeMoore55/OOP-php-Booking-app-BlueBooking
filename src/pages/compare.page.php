<!-- COMPARING-PAGE -->

<?php
    session_start();

    require("/MAMP/htdocs/OOP-php-Booking-app/src/classes/HotelInitialization.class.php"); 
    require("/MAMP/htdocs/OOP-php-Booking-app/src/classes/BookingInfo.class.php"); 


    $checkIn = $_SESSION["checkIn"];
    $checkOut = $_SESSION["checkOut"];   

    $hotelOptions = hotelOptionsArray();

    $hotelArray = $_SESSION['simpleHotelsArray'];
    $selectedHotelName = $_SESSION['selection'];

    $optionsArray = $hotelArray;
    

    $dayDifference = date_diff(date_create($checkIn), date_create($checkOut));
    $amountOfDays = $dayDifference->format('%a');

    $bookedHotel = file_get_contents("bookingInfo.json");
    $selectedHotel = json_decode($bookedHotel, TRUE);  


    unset($optionsArray["$selectedHotelName"]);

    $options = $optionsArray;
    $twoOptions = array_slice($options, 0, 2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueBooking</title>
    <link rel="icon" href="../images/blue-squares.png">
    <link rel="stylesheet" href="../css/compare-page.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&family=Fascinate&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">

</head>
<body>
    <?php
           include("/MAMP/htdocs/OOP-php-Booking-app/src/includes/header.inc.php"); 
    ?>
    <main>
        <div class="selected-hotel">
            <?php
                 foreach ($selectedHotel as $index => $hotel) {
                    $totalCost =  $amountOfDays * $hotel["rate"];
                    echo 
                        '<div>
                        <fieldset><legend>Your Booking</legend>
                            <h3>'.$hotel["hotel"].'</h3>
                            <img class="hotel-img" src="' . $hotel["image"] . '">
                            <h4>Description</h4>
                            <p>'.$hotel["description"].'</p>
                            <h4>Rating:</h4>
                            <p>'.$hotel["rating"].'/5</p>
                            <h4>Rate:</h4>
                            <p>R'.$hotel["rate"].'-00/night</p>
                            <h4>Your Stay:</h4>
                            <ul>
                                <li>Days: '.$amountOfDays.'</li>
                                <li>Total Cost: R'.$totalCost.'-00</li>
                            </ul>
                            <form action="confirmation.page.php" method="GET" class="confirm">
                                <input type="submit" name="confirm" value="Confirm Booking" class="confirm-btn">
                            </form></fieldset>
                        </div>';
                }; 
            ?>
        </div>
        <div class="option-list">
            
            <?php
                foreach ($twoOptions as $hotels => $value) {

                    $totalCosts =  $amountOfDays * $value["rate"];

                        echo        
                           '<div>
                           <fieldset><legend>Alternative Option</legend>
                                <h3>'.$hotels.'</h3>
                                <img class="hotel-img" src="' . $value["image"] . '">
                                <h4>Description</h4>
                                <p>'.$value["desc"].'</p>
                                <h4>Rating:</h4>
                                <p>'.$value["rating"].'/5</p>
                                <h4>Rate:</h4>
                                <p>R'.$value["rate"].'-00/night</p>
                                <h4>Your Stay:</h4>
                                <ul>
                                    <li>Days: '.$amountOfDays.'</li>
                                    <li>Total Cost: R'.$totalCosts.'-00</li>
                                </ul>
                                <form action="confirmation.page.php" method="GET" class="confirm">
                                    <input type="submit" name="confirm" value="Book This Option" class="confirm-btn">
                                </form></fieldset>
                            </div>';
                }; 
            ?> 
        </div>
    </main>
</body>
</html>