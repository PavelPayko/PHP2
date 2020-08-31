<?php
include "abctractProduct.php";

class PiecesProduct extends Product{

    private function getPrice(){
        echo $this->price;
    }
}