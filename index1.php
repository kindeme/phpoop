
<?php 

class User{
    //member variables
    public $id;
    public $name;
    public $email;
    public $phone;

    //member function
    //function setData($i,$n,$e,$p){
        // $this->id =$i;
        // $this->name =$n;
        // $this->email =$e;
        // $this->phone =$p;
    //}
    function getData(){
        return "ID: ".$this->id ."<br>Name :" .$this->name."<br>Email : ".$this->email."<br>Phone : ".$this->phone. "<br><br>//";
    }   
}   

$user1 = new User();
$user1->id = 1;
$user1->name = "Harry Potter";
$user1->email = "harrypotter@gmail.com";
$user1->phone = "679087654";
echo $user1->getData();

?>