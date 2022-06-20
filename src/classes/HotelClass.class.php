<?php
/* this class is the "setup" of each hotel */

/* MM - add images */

    class Hotel implements JsonSerializable{
        public $name;
        public $image;
        public $rate;
        public $rating;
        public $description;
        public $pool; 
        public $wifi;
        public $spa;
        public $restaurant;
        public $childFriendly;

        public function __construct($name, $image, $rate, $rating, $description, $pool, $wifi, $spa, $restaurant, $childFriendly,)
        {
            $this->name = $name; 
            $this->image = $image;
            $this->rate = $rate;
            $this->rating = $rating;
            $this->description = $description;
            $this->pool = $pool;
            $this->wifi = $wifi;
            $this->spa = $spa;
            $this->restaurant = $restaurant;
            $this->childFriendly = $childFriendly;
        }

        public function jsonSerialize() {
    
            $assocArray = [
                "name" => $this->name,
                "image" => $this-> image,
                "rate" => $this->rate,
                "rating" => $this->rating,
                "description" => $this->description,
                "pool" => $this->pool,
                "wifi" => $this->wifi,
                "spa" => $this->spa,
                "restaurant" => $this->restaurant,
                "childFriendly" => $this->childFriendly,
            ];
    
            return $assocArray;
        }

        public static function parse($Object){
            $newHotel = new Hotel($Object->name, $Object->image, $Object->rate, $Object->rating, $Object->description, $Object->pool, $Object->wifi, $Object->spa, $Object->restaurant, $Object->childFriendly);
            return $newHotel;
        }


        /* ---- Getters & Setters ---- */
        public function get_name(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;

            return $this;
        }

        public function get_image(){
            return $this->image;
        }

        public function setImage($image){
            $this->image = $image;

            return $this;
        }

        public function get_rate(){
            return $this->rate;
        }

        public function setRate($rate){
            $this->rate = $rate;

            return $this;
        }

        public function get_rating(){
            return $this->rating;
        }

        public function setRating($rating){
            $this->rating = $rating;

            return $this;
        }

        public function get_description(){
            return $this->description;
        }

        public function setDescription($description){
            $this->description = $description;

            return $this;
        }
  
        public function get_pool(){
            return $this->pool;
        }

        public function setPool($pool){
            $this->pool = $pool;

            return $this;
        }
  
        public function get_wifi(){
            return $this->wifi;
        }

        public function setWifi($wifi){
            $this->wifi = $wifi;

            return $this;
        }
   
        public function get_spa(){
            return $this->spa;
        }

        public function setSpa($spa){
            $this->spa = $spa;

            return $this;
        }

        public function get_restaurant(){
            return $this->restaurant;
        }

        public function setRestaurant($restaurant){
            $this->restaurant = $restaurant;

            return $this;
        }

        public function get_childFriendly(){
            return $this->childFriendly;
        }

        public function setChildFriendly($childFriendly){
            $this->childFriendly = $childFriendly;

            return $this;
        }
    };

?>