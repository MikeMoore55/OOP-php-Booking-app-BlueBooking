<?php
    class BookingInformation{

        public $name;
        public $surname;
        public $email;
        public $hotel;
        public $checkIn;
        public $checkOut;
        public $rate;
       

        public function __construct($userName, $userSurname, $userEmail, $hotelName, $checkInDate, $checkOutDate, $hotelRate)
        {
            $this->name = $userName;
            $this->surname = $userSurname;
            $this->email = $userEmail; 
            $this->hotel = $hotelName;
            $this->checkIn = $checkInDate;
            $this->checkOut = $checkOutDate;
            $this->rate = $hotelRate;     
        }

    
    
        public function calcDays(){
            $dayDifference = date_diff(date_create($this->checkIn), date_create($this->checkOut));
            $amountOfDays = $dayDifference->format('%a');
    
            return $amountOfDays;
        }
        
        public function calcCosts(){
            $days = $this->calcDays();

            $totalCosts =  $days * $this->rate;
            
            return $totalCosts;
        }
    
        public function fullName(){
            $fullName = $this->name." ".$this->surname;
    
            return $fullName;
        }
            
        public static function createBooking($userName, $userSurname, $userEmail, $hotelName, $checkInDate, $checkOutDate, $hotelRate){
            if ($checkInDate >= $checkOutDate) {
                echo "
                <script>
                    alert('Error, duration of stay must be longer than 1 night/day');
                </script>
                ";
    
            } else {
    
                $newBooking = new BookingInformation($userName, $userSurname, $userEmail, $hotelName, $checkInDate, $checkOutDate, $hotelRate);

                return $newBooking;
            }
        }

    }
?>