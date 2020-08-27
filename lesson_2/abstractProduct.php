<?php

abstract class Product {
    private $title;
    private $price;
    private $description;

    abstract function getPrice(){}
    function getProfit(){
        echo 'Общий доход';
    }
}