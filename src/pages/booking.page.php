
<!-- BOOKING-PAGE -->

<?php
    require("/MAMP/htdocs/OOP-php-Booking-app/src/includes/HotelInitialization.inc.php"); 

    if (!isset($_SESSION['Hotel'])) {
        $_SESSION['Hotel'] = [];

        initialize();

        $hotelOptions = file_get_contents("hotelList.json");

        $_SESSION['Hotel'] = json_decode($hotelOptions, true);
        
        $hotelOptions = $_SESSION['Hotel'];
        
    }

     /* loop through the array to make select option based on the name */
    foreach ($hotelOptions as $hotels => $value) {
        $option .= "<option>".$value["name"]."</option>" ;
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
    <!-- css stylesheet -->
    <link rel="stylesheet" href="../css/booking.css">   
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
    <!-- using "GET" so selection can appear in link, if user chooses to send link to someone who wishes to see the selection -->
    <form class="booking-form" method="GET" action="../pages/display.php">
            <div class="user-name">
                <label for="firstName" class="name">Name:</label>
                <br>
                <input type="text" name="firstName" class="text-input">
                <br>
                <label for="lastName" class="surname">Surname:</label>
                <br>
                <input type="text" name="lastName" class="text-input">
            </div>
            <div class="user-email">
                <label for="email" class="email">E-mail:</label>
                <br>
                <input type="email" name="email" class="text-input">
            </div>
            <div class="user-selection">
                <label for="selection" class="selection">Where would you like to stay:</label>
                <br>
                <select name="selection" class="form-select">
                    <?php
                    
                         echo($option); 
                
                    ?>
                </select>
            </div>

            <div class="check-in-out">
                <label for="checkIn" class="date">Check-In:</label>
                <br>
                <input type="date" name="checkIn" class="date-input">
                <br>
                <label for="checkOut" class="date">Check-Out:</label>
                <br>
                <input type="date" name="checkOut" class="date-input">
            </div>
            <br>
            <input type="submit" name="save" value="Save" class="book-btn"> 
        </form>
    </main>
</body>
</html>