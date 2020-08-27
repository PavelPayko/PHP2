<?php
include "abctractProduct.php";

class DigitalProduct extends Product{
    const digitalPrice = $this->price/2;;
    private function getPrice(){
        echo self::digitalPrice;
    }
}
