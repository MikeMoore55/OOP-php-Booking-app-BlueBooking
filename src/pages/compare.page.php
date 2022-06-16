<!-- COMPARING-PAGE -->

<?php
    session_start();

    include ("/MAMP/htdocs/OOP-php-Booking-app/src/functions/calcDays.func.php");
    include ("/MAMP/htdocs/OOP-php-Booking-app/src/functions/calcCosts.func.php");
    include ("/MAMP/htdocs/OOP-php-Booking-app/src/functions/fullName.func.php");
    include ("/MAMP/htdocs/OOP-php-Booking-app/src/functions/hotelArray.func.php");

    $hotelOptions = hotelOptionsArray();


    $selectedHotel = $_SESSION['selectedHotel'];
    $fullName = $_SESSION['name'];

    $totalCosts = calcCosts($amountOfDays, $hotelRate);
    $amountOfDays = calcDays($checkIn, $checkOut);


    
    $display .= "
    <div>
        <h2>Your Booking</h2>
        <h3>User: </h3><p>".$fullName."</p>
        <h3>Email: </h3><p>".$email."</p>
        <div class='hotel'>
            <div class='hotel-name'>
                <h3>Hotel: </h3><p>".$selection."</p>
            </div>
            <div class='hotel-rate'>            
                <h3>Hotel Rate: </h3><p>R".$selectedHotel["rate"]."/day</p>
            </div>
        </div>
        <h3>Days: </h3><p>".$amountOfDays."</p>
        <h3 class='total'>Total: </h3><p>R".$totalCosts."</p>           
    </div>";
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