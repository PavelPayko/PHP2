<?php
include "abctractProduct.php";

class WeightProduct extends Product{
    $weight;
    private function getPrice(){
        echo $this->price*$this->weight;
    }
}