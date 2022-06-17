<!-- COMPARING-PAGE -->

<?php
    session_start();

    require("/MAMP/htdocs/OOP-php-Booking-app/src/classes/HotelInitialization.class.php"); 
    require("/MAMP/htdocs/OOP-php-Booking-app/src/classes/BookingInfo.class.php"); 

    $_SESSION['selectedHotelKey'];

    $selectedHotel = $_SESSION['selectedHotelKey'];

    $hotelOptions = hotelOptionsArray();

    $hotelArray = $_SESSION['simpleHotelsArray'];
    $selectedHotelName = $_SESSION['selection'];



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
    <link rel="stylesheet" href="../css/compare.style.css">

</head>
<body>
    <?php
           include("/MAMP/htdocs/OOP-php-Booking-app/src/includes/header.inc.php"); 
    ?>
    <main>
    </main>
</body>
</html>