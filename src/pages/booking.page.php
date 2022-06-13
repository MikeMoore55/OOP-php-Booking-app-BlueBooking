
<!-- BOOKING-PAGE -->

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
    <header class="header">
        <img src="../images/blue-squares.png" class="squares">
        <h1><span>Blue</span>Booking</h1>
    </header>
    <main>
    <!-- using GET so selection can appear in link, if user chooses to send link to someone who wishes to see the selection -->
    <form class="booking-form" method="GET" action="../pages/display.php">
            <label for="firstName" class="name">Name:</label>
            <br>
            <input type="text" name="firstName" class="text-input">
            <br>
            <label for="lastName" class="surname">Surname:</label>
            <br>
            <input type="text" name="lastName" class="text-input">
            <br>
            <label for="email" class="email">E-mail:</label>
            <br>
            <input type="email" name="email" class="text-input">
            <br>
            <label for="selection" class="selection">Where would you like to stay:</label>
            <br>
            <select name="selection">
                <?php
                
                    echo($options);
                
                ?>
            </select>
            <br>
            <label for="checkIn" class="date">Check-In:</label>
            <br>
            <input type="date" name="checkIn" class="date-input">
            <br>
            <label for="checkOut" class="date">Check-Out:</label>
            <br>
            <input type="date" name="checkOut" class="date-input">
            <br>
            <br>
            <input type="submit" name="submit" value="Submit" class="book-btn"> 
        </form>
    </main>
</body>
</html>