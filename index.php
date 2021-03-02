<?php

// static vari
class Test
{

    // static method and properties are public
    public static $id = 1;
    public static $name = 'Harry Potter';
    

    public static function showdata()
    {
        echo 'ID : '.self::$id  ++;
    }
}
echo Test::$name;
//or Test::$name = 'Ron';
