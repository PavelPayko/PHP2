<?php

trait SingletonMethods {
    public static function getObject(){
        if(self::$db === null){
            self::$db = new DB;
        }
        return self::$db;
    }
    public function select(){}
    public function update(){}
    public function delete(){}
    public function insert(){}
}
class Singleton{
    use SingletonMethods;

    static $obj;//объект нашего класса в дальнейшем
    static $connect;
    
    private function __construct(){}
}
