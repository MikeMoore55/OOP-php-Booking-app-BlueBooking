<?php
/* here we create a populated array using the setup from the HotelClass.class.php */
    
    require "../classes/HotelClass.class.php";
/* Based on real hotels in South Africa */
    $hotelListArray = [
        new Hotel("Alveston Manor Boutique Hotel & Spa", 1500, 4, "Cosy rooms with free Wi-Fi & TVs in a sophisticated hotel featuring a spa & a restaurant.", true, true, true, true, true),
        new Hotel("12 Apostles Hotel & Spa", 7150, 4.6, "Upscale property offering ocean views, a spa & restaurants, as well as a cinema & outdoor pools.", true, true, true, true, true),
        new Hotel("The Oyster Box Hotel", 7039, 4.7, "Luxe hotel offering refined rooms & suites, plus breakfast, a spa & an oceanfront pool.", true, true, true, true, true),
        new Hotel("Beverly Hills Hotel", 4966, 4.6, "Laid-back quarters with ocean views, plus a poolside spa, a cafe/bar and a fine-dining restaurant.", true, true, true, true, true),
        new Hotel("Santé Wellness Retreat and Spa", 3695, 4.5, "Refined suites & villas in a Spanish Colonial-style hotel, plus a spa, 2 pools & upscale dining.", true, true, true, true, false),
        new Hotel("Libra Lodge", 758, 4.6, "Simply furnished rooms in a down-to-earth bed-and-breakfast featuring an outdoor pool & dining.", true, true, false, true, true),
    ];

?>