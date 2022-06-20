
<!-- LANDING PAGE -->

<!-- php

$request = $_SERVER['REQUEST_URI'];

$basepath = "OOP-php-Booking-app/";
$request = str_replace($basepath, "", $request);
echo $request;

switch ($request) {
    case '/booking':
        require __DIR__ . '/src/pages/booking.page.php';
        break;
    default:
        http_response_code(404);
        echo "page not found";
        break;
} -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueBooking</title>
    <link rel="icon" href="./src/images/blue-squares.png">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&family=Fascinate&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <!-- css stylesheet -->
    <link rel="stylesheet" href="./src/css/index.style.css">
</head>
<body>
    <main>
        <div class="logo">
            <img src="./src/images/blue-squares.png" class="squares"> 
            <div class="intro">
                <p class="top-text">
                    Welcome to,
                </p>    
                <h1><span>Blue</span>Booking</h1>
                <p class="bottom-text">
                    The Best and Bluest online Booking Platform!
                </p>
                <!-- button to take user to booking page -->
                <form method="POST" action="./src/pages/booking.page.php" class="booking-form">
                <input type="submit" name="submit" value="Make a Booking" class="booking-btn">
                </form>
            </div>
        </div>

        
    </main>
</body>
</html>