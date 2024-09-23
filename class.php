<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);


// // CLASS AND OBJECT
// create our own data type called User.
class User {


    // Private properties (only accessible within the class)
    private $name;
    private $email;

    // Constructor to initialize properties when creating an object
    public function __construct($email, $name) {
        $this->email = $email; 
        $this->name = $name;  
    }

    // Getter method to retrieve the user's name
    public function getName() {
        return $this->name;
    }

    // Setter method to update the user's name with validation
    public function setName($name) {
        if (is_string($name) && strlen($name) > 1) {
            $this->name = $name; 
            return "Name has been updated to $name";
        } else {
            return "Not a valid name";
    }

    // Method to simulate user login and display current user's information
    public function login() {
        echo "Current user is: $this->name and logged in as: $this->email <br />";
    }

}


// creating an object for the class
$userOne = new User('mario@uk.co', 'Mario');
$userTwo = new User('yoshi@net.co', 'Yoshi');

echo $userOne->login();
echo $userTwo->login();

// since properties are private, use setName function to change name
$userTwo->setName('Ryu');

echo $userTwo->login();



?>