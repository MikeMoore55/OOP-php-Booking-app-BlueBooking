<?php
/* this class is the "setup" of each hotel */

/* MM - add images */
    class Hotel{
        public $name;
        public $rate;
        public $rating;
        public $description;
        public $pool; 
        public $wifi;
        public $spa;
        public $restaurant;
        public $childFriendly;

        public function __construct($name, $rate, $rating, $description, $pool, $wifi, $spa, $restaurant, $childFriendly,)
        {
            $this->name = $name; 
            $this->rate = $rate;
            $this->rating = $rating;
            $this->description = $description;
            $this->pool = $pool;
            $this->wifi = $wifi;
            $this->spa = $spa;
            $this->restaurant = $restaurant;
            $this->childFriendly = $childFriendly;
        }

        public function get_name(){
            return $this->name;
        }

        public function get_rate(){
            return $this->rate;
        }

        public function get_rating(){
            return $this->rating;
        }

        public function get_description(){
            return $this->description;
        }
  
        public function get_pool(){
            return $this->pool;
        }
  
        public function get_wifi(){
            return $this->wifi;
        }
   
        public function get_spa(){
            return $this->spa;
        }

        public function get_restaurant(){
            return $this->restaurant;
        }

        public function get_childFriendly(){
            return $this->childFriendly;
        }
    };

?>