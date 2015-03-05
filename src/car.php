<?php
class Car
{
    private $make_model;
    private $price;
    private $miles;
    public $image;

    function __construct($type_car, $value_car, $miles_car, $image_car="image") {
        $this->make_model = $type_car;
        $this->price = $value_car;
        $this->miles = $miles_car;
        $this->image = $image_car;
    }



    function worthBuying($max_price, $max_mileage) {
        return $this->price < $max_price && $this->miles < $max_mileage;
    }


    function setMake_model($new_make){
        $string_model = (string) $new_make;
         if ($string_model != 0) {
             $this->make_model = $string_model;
         }
    }
    function setMiles($new_miles){
        $float_miles = (float) $new_miles;
        if ($float_miles != 0) {
            $this->miles = $float_miles;
        }
    }
    function setPrice($new_price){
        $float_price = (float) $new_price;
         if ($float_price != 0) {
            $this->price = $float_price;
         }
    }
     function setImage($new_image){
         $string_image = (string) $new_image;
         if ($string_image != 0){
             $this->image = $string_image;
         }
     }

    function getMake_model(){
        return $this->make_model;
    }
    function getMiles(){
        return $this->miles;
    }
    function getPrice()    {
        return $this->price;
    }
    function getImage(){
        return $this->image;
    }

    function save() {
        array_push($_SESSION['add_cars'], $this);
    }


    static function getAll() {
        return $_SESSION['add_cars'];
    }

    static function deleteAll() {
        $_SESSION['add_cars'] = array();
    }
}
