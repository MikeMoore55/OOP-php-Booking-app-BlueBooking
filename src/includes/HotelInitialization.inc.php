<?php
/* here we create a populated array using the setup from the HotelClass.class.php */

    require("/MAMP/htdocs/OOP-php-Booking-app/src/classes/HotelClass.class.php"); 

    function initialize(){
        $hotelListArray = [
            /* Based on real hotels in South Africa */
                new Hotel("Alveston Manor Boutique Hotel & Spa","../images/alveston-mannor.jpg" ,1500, "4", "Cosy rooms with free Wi-Fi & TVs in a sophisticated hotel featuring a spa & a restaurant.", "yes", "yes", "yes", "yes", "yes"),
                new Hotel("12 Apostles Hotel & Spa","../images/12apostle-hotel.webp" , 7150, "4.6", "Upscale property offering ocean views, a spa & restaurants, as well as a cinema & outdoor pools.", "yes", "yes", "yes", "yes", "yes"),
                new Hotel("The Oyster Box Hotel","../images/oyster-box-hotel.webp" , 7039, "4.7", "Luxe hotel offering refined rooms & suites, plus breakfast, a spa & an oceanfront pool.", "yes", "yes", "yes", "yes", "yes"),
                new Hotel("Beverly Hills Hotel","../images/beverly-hotel.jpg" , 4966, "4.6", "Laid-back quarters with ocean views, plus a poolside spa, a cafe/bar and a fine-dining restaurant.", "yes", "yes", "yes", "yes", "yes"),
                new Hotel("Santé Wellness Retreat and Spa", "../images/sante-wellness-hotel.jpg", 3695, "4.5", "Refined suites & villas in a Spanish Colonial-style hotel, plus a spa, 2 pools & upscale dining.", "yes", "yes", "yes", "yes", "no"),
                new Hotel("Libra Lodge","../images/libra-lodge.jpg" , 758, "4.6", "Simply furnished rooms in a down-to-earth bed-and-breakfast featuring an outdoor pool & dining.", "yes", "yes", "no", "yes", "yes"),
        ];

        /* take the above array, convert to json file */
        $hotelList = json_encode($hotelListArray);
        file_put_contents("hotelList.json", $hotelList);
    };

    function hotelOptionsArray(){

        $hotelOptions = file_get_contents("hotelList.json");
        $hotelOptions = json_decode($hotelOptions, TRUE); 
    
        return $hotelOptions;
    }
    
?>