
<!-- DISPLAY-PAGE! -->


<!-- 
    idea behimd this page is for user to see the selection, in great detail, and if user wishes to compare, can click a button, and if not, 
    can finnish booking by clicking confirm button
 -->

<?php
    session_start();
    require("/MAMP/htdocs/OOP-php-Booking-app/src/classes/HotelInitialization.class.php"); 
    require("/MAMP/htdocs/OOP-php-Booking-app/src/classes/BookingInfo.class.php"); 

    /* take json file and convert into associative array */
    $hotelOptions = hotelOptionsArray();
 

    if (isset($_GET['save'])) {

        /* variables from form */
        $name = $_GET['firstName'];
        $surname = $_GET['lastName'];
        $email = $_GET['email'];
        $checkIn = $_GET['checkIn'];
        $checkOut = $_GET['checkOut'];
        $selection = $_GET['selection'];

        $_SESSION['selection'] = $selection;
        $_SESSION["checkIn"] = $checkIn;
        $_SESSION["checkOut"] = $checkOut;    

        /* empty array */
        $hotelArray = array();
        
        /* loop thtough the original array, and make the hotel name, the key of the array, to make matching the selection to the appropriate info accurate */
        foreach ($hotelOptions as $Hotel => $value) {
            $hotelArray[$value['name']] = array("rate" => $value["rate"],"image" => $value["image"], "desc" => $value["description"], "rating" => $value["rating"], "pool" => $value["pool"], "spa" => $value["spa"], "wifi" => $value["wifi"], "restaurant" => $value["restaurant"], "childFriendly" => $value["childFriendly"] );
        };

        $_SESSION['simpleHotelsArray'] = $hotelArray;

        /* create an array where all the "selected hotels" info is stored */
        $selectedHotel = $hotelArray["$selection"];
        $hotelRate = $selectedHotel["rate"];
        $hotelImage = $selectedHotel["image"];

        $newBooking = BookingInformation::createBooking($name, $surname, $email, $selection, $hotelImage, $checkIn, $checkOut, $hotelRate);
      
        $selectedHotelObject = [];
        array_push($selectedHotelObject, $newBooking);

    /*     SaveToJson($newBooking);
        bookingArray(); */

        $_SESSION['selectedHotelObject'] = $selectedHotelObject;

        
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueBooking</title>
    <link rel="icon" href="../images/blue-squares.png">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&family=Fascinate&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <!-- css stylesheet -->
    <link rel="stylesheet" href="../css/display.css"> 
</head>
<body>
    <?php
           include("/MAMP/htdocs/OOP-php-Booking-app/src/includes/header.inc.php"); 
    ?>
    <div class="display-div">    
        <?php 
              
              
              foreach ($selectedHotelObject as $index => $booking) {
                    echo'
                            <div>
                                <h2>Your Booking</h2>
                                <div class="user">
                                    <div class="name">
                                        <h3>User: </h3><p>'.$booking ->fullName().'</p>
                                    </div>
                                    <div class="email">
                                        <h3>Email: </h3><p>'.$booking-> email.'</p>
                                    </div>
                                </div>
                                <div class="hotel-info">
                                    <div class="hotel">
                                        <div class="hotel-name">
                                            <h3>Hotel: </h3><p>'.$booking->hotel.'</p>
                                        </div> 
                                        <div class="hotel-rate">            
                                            <h3>Hotel Rate: </h3><p>R'.$booking->rate.'-00/day</p>
                                        </div> 
                                    </div>    
                                    <img class="hotel-img" src="'.$booking->image.'">
                                </div>   
                                <div class="time">
                                    <div class="in">
                                        <h3>Check-In: </h3><p>'.$booking->checkIn.'</p>
                                    </div>
                                    <div class="out">
                                        <h3>Check-Out: </h3><p>'.$booking->checkOut.'</p>
                                    </div>
                                    <div class="total-days">
                                        <h3>Days: </h3><p>'.$booking->calcDays().'</p>
                                    </div>        
                                </div>
                                <h3 class="total">Total: </h3><p>R'.$booking->calcCosts().'-00</p>  
                            </div>
                            ';
                }; 
        ?>
   
    <div class="buttons">
        <form action="compare.page.php" method="GET" class="compare">
            <input type="submit" name="compare" value="Compare Booking" class="compare-btn">
        </form>
        <form action="confirmation.page.php" method="GET" class="confirm">
            <input type="submit" name="confirm" value="Confirm Booking" class="confirm-btn">
        </form>
    </div>
 </div>
</body>
</html>