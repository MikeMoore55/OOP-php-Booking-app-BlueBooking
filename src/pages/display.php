<?php

    $hotelOptions = file_get_contents("hotelList.json");
    $hotelOptions = json_decode($hotelOptions, TRUE);

    $array = array_values($hotelOptions);
   


    if (isset($_GET['save'])) {

        $name = $_GET['firstName'];
        $surname = $_GET['lastName'];
        $email = $_GET['email'];
        $selection = $_GET['selection'];

        foreach ($hotelOptions as $hotels => $value) {
             ;
        };

        $selectedHotel = $hotelOptions["name"]["$selection"];
        $checkIn = $_GET['checkIn'];
        $checkOut = $_GET['checkOut'];
        $dayDifference = date_diff(date_create($checkIn), date_create($checkOut));
        $amountOfDays = $dayDifference->format('%a days');
        $totalCosts = $amountOfDays * $selectedHotel['Rate']; 

        $return .= "<p>".$selectedHotel."</p>";
        $key = array_search($selection, $array);
    }

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
    <link rel="stylesheet" href="../css/booking.css"> 
</head>
<body>
    <?php 
        print_r($array);
        print_r($key);
    ?>
</body>
</html>