<?php
// task 1-4
class Product {
    protected $id;
    protected $name;
    protected $price;

    function __construct($id, $title, $price){
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
    }
    
    function toCart($title){
        echo "товар".$this->title." добавлен в корзину";
    }   
}

class Opt extends Product {

    $this->price = $this->price-($this->price*0.1);
}

// task 5

class A {
public function foo() {
static $x = 0;
echo ++$x;
}
}
$a1 = new A(); 
$a2 = new A();
$a1->foo(); // 1
$a2->foo(); // 2
$a1->foo(); // 3
$a2->foo(); // 4

// task 6

class A {
public function foo() {
static $x = 0;
echo ++$x;
}
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); // 1
$b1->foo(); // 1
$a1->foo(); // 2
$b1->foo(); // 2