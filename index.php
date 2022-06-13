
<!-- LANDING PAGE -->

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
    <link rel="stylesheet" href="./src/css/index.css">
</head>
<body>
    <main>
        
        <div class="intro">
            <p class="top-text">
                Welcome to,
            </p>    
            <h1><span>Blue</span>Booking</h1>
            <p class="bottom-text">
                The Test and Bluest online Booking Platform!</p>
        </div>

        <img src="./src/images/blue-squares.png" class="squares">
        <!-- button to take user to booking page -->
        <form method="POST" action="./src/pages/booking.page.php" class="booking-form">
            <input type="submit" name="submit" value="Make a Booking" class="booking-btn">
        </form>
    </main>
</body>
</html>