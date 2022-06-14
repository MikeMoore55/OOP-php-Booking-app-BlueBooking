<?php

    $hotelOptions = file_get_contents("hotelList.json");
    $hotelOptions = json_decode($hotelOptions, TRUE);

    
   


    if (isset($_GET['save'])) {

        $name = $_GET['firstName'];
        $surname = $_GET['lastName'];
        $email = $_GET['email'];
        $checkIn = $_GET['checkIn'];
        $checkOut = $_GET['checkOut'];
        $selection = $_GET['selection'];


        $fullName .= $name." ".$surname;
        
        $dayDifference = date_diff(date_create($checkIn), date_create($checkOut));
        $amountOfDays = $dayDifference->format('%a');
        

        $hotelArray = array();

        foreach ($hotelOptions as $Hotel => $value) {
            $hotelArray[$value['name']] = array("rate" => $value["rate"], "desc" => $value["description"]);
        };

        $selectedHotel = $hotelArray["$selection"];
        $totalCosts = $amountOfDays * $selectedHotel["rate"]; 
      
        $display .= "
        <div>
            <p>User: ".$fullName."</p>
            <p>Hotel: ".$selection."</p>
            <p>Days: ".$amountOfDays."</p>
            <p>Rate: R".$selectedHotel["rate"]."/day</p>
            <p>Total: R".$totalCosts."</p>           
        </div>";
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
        echo $display;
    ?>
</body>
</html>