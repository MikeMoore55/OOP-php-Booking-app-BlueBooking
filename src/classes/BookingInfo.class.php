<?php
    class Booking{
        public $name;
        public $surname;
        public $email;
        public $hotel;
        public $checkIn;
        public $checkOut;
        public $totalDays;
        public $rate;
        public $total;

        private function __construct($userName, $userSurname, $userEmail, $hotelName, $checkInDate, $checkOutDate, $bookingDays, $hotelRate, $bookingTotal)
        {
            $this->name = $userName;
            $this->surname = $userSurname;
            $this->email = $userEmail;
            $this->hotel = $hotelName;
            $this->checkIn = $checkInDate;
            $this->checkOut = $checkOutDate;
            $this->totalDays = $bookingDays;
            $this->rate = $hotelRate;
            $this->total = $bookingTotal;
        }

        function calcCosts($amountOfDays, $hotelRate){
            $totalCosts = $amountOfDays * $hotelRate;
            
            return $totalCosts;
        }
    
        function calcDays($checkIn, $checkOut){
            $dayDifference = date_diff(date_create($checkIn), date_create($checkOut));
            $amountOfDays = $dayDifference->format('%a');
    
            return $amountOfDays;
        }
    
        function fullName($name,$surname){
            $fullName = $name." ".$surname;
    
            return $fullName;
        }
    }
?>