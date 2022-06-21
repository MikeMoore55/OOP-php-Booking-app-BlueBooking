<!-- CONFIRMATION-PAGE! -->

<!-- ?php


    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    //Load Composer's autoloader
    require '../mail/vendor/autoload.php';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->SMTPDebug = 1;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '74850f4b25d8c4';                     //SMTP username
        $mail->Password   = '03aaae6f7b04c4';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('michaelwillemmoore@gmail.com', 'Mailer');
        $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient

        $body = '
                <h1>Booking Confirmation</h1>
                <h2>Booking Details</h2>
                <h3>Hotel: </h3>
                <p>---</p>
                <h3>Rate: </h3>
                <p>--- ZAR/night</p>
                <h3>Check In: </h3>
                <p>---</p>
                <h3>Check Out: </h3>
                <p>---</p>
                <h3>Stay Duration:</h3>
                <p>--- nights</p>
                <h3>Total Cost:</h3>
                <p>--- ZAR</p>
                <p>We hope you enjoy your stay.</p>
                <br>
                <p>Thank you for using BlueBooking</p>
                ';

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'BlueBooking Confirmation E-mail';
        $mail->Body    = $body;
        $mail->AltBody = strip_tags($body);

        $mail->send();
        echo 'A confirmation e-mail has been sent';
    } catch (Exception $e) {
        echo "Confirmation email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?> -->

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
    <link rel="stylesheet" href="../css/confirm.style.css">
</head>
<body>
    <?php
            include("/MAMP/htdocs/OOP-php-Booking-app/src/includes/header.inc.php"); 
    ?>
</body>
</html>