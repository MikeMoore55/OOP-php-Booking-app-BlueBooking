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

        function __construct($name, $rate, $rating, $description, $pool, $wifi, $spa, $restaurant, $childFriendly,)
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

        function get_name(){
            return $this->name;
        }

        function get_rate(){
            return $this->rate;
        }

        function get_rating(){
            return $this->rating;
        }

        function get_description(){
            return $this->description;
        }
  
        function get_pool(){
            return $this->pool;
        }
  
        function get_wifi(){
            return $this->wifi;
        }
   
        function get_spa(){
            return $this->spa;
        }

        function get_restaurant(){
            return $this->restaurant;
        }

        function get_childFriendly(){
            return $this->childFriendly;
        }
    };

?>