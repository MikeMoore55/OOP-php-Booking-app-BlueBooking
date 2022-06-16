
<!-- DISPLAY-PAGE! -->


<!-- 
    idea behimd this page is for user to see the selection, in great detail, and if user wishes to compare, can click a button, and if not, 
    can finnish booking by clicking confirm button
 -->

<?php
    session_start();

    include ("/MAMP/htdocs/OOP-php-Booking-app/src/functions/calcDays.func.php");
    include ("/MAMP/htdocs/OOP-php-Booking-app/src/functions/calcCosts.func.php");
    include ("/MAMP/htdocs/OOP-php-Booking-app/src/functions/fullName.func.php");
    include ("/MAMP/htdocs/OOP-php-Booking-app/src/functions/hotelArray.func.php");

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

        /* create a single Name variable by combining first-name and last-name */
        $fullName = fullName($name, $surname);
        
        /* to calculate the amount of days between the check-in and check-out */
        $amountOfDays = calcDays($checkIn, $checkOut);

        /* empty array */
        $hotelArray = array();
        
        /* loop thtough the original array, and make the hotel name, the key of the array, to make matching the selection to the appropriate info accurate */
        foreach ($hotelOptions as $Hotel => $value) {
            $hotelArray[$value['name']] = array("rate" => $value["rate"], "desc" => $value["description"]);
        };

        /* create an array where all the "selected hotels" info is stored */
        $selectedHotel = $hotelArray["$selection"];
        $hotelRate = $selectedHotel["rate"];
        
        $_SESSION['selectedHotel'] = $selectedHotel;
        $_SESSION['name'] = $fullName;

        /* function to calculate total costs */
        $totalCosts = calcCosts($amountOfDays, $hotelRate);
      
        /* MM - make into function */
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
    <link rel="stylesheet" href="../css/display.style.css"> 
</head>
<body>
    <?php
           include("/MAMP/htdocs/OOP-php-Booking-app/src/includes/header.inc.php"); 
    ?>
    <div class="display-div">    
        <?php 
            echo $display;
        ?>
    </div>
    <div class="buttons">
        <form action="compare.page.php" method="GET" class="compare">
            <input type="submit" name="compare" value="Compare Booking" class="compare-btn">
        </form>
        <form action="" method="" class="confirm">
            <input type="submit" name="confirm" value="Confirm Booking" class="confirm-btn">
        </form>
    </div>
</body>
</html>