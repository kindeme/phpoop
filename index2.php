<?php

class Person{

    //member variables
    private $fname;
    private $lname;

    // Constructor method and default value
    function __construct($fname=null, $lname=null){

        echo 'The class '.__CLASS__.' Initiated! <br>';
        // initialisme the variable

        $this->fname = $fname;
        $this->lname =$lname;
    }

    function showName(){
        echo 'My name is : '.$this->fname.' '.$this->lname.'<br>';
    }

    // destructor
    function __destruct(){
        echo 'The class "'. __CLASS__.'" Destroyed!';
    }
function add($a,$b){
    return$a +$b;

}
}
$obj = new Person("Harry","Potter");
$obj->showName();

echo 'Sum = '.$obj->add(10,20).'<br>';
unset($obj); //destroyed the object


?>