<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);


// // CLASS AND OBJECT
// create our own data type called User.

class User{

    //public properties can be accessed and modify outside the class
    private $name;
    public $email;
 
    // constructor 
    public function __construct($email, $name){
        $this->email = $email;
        $this->name = $name;
    }

    // methods
    function login(){
        echo "current user is: $this->name and logged in as: $this->email <br />";
    }

}

// creating an object for the class
$userOne = new User('mario@uk.co', 'Mario');
$userTwo = new User('yoshi@net.co', 'Yoshi');

echo $userOne->login();
echo $userTwo->login();

// since properties are public, value can be modified.
$userTwo->name = 'Ryu';
$userTwo->email = 'Ryu@change.co';

echo $userTwo->login();




?>