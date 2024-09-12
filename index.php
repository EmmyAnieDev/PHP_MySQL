<?php

$stringOne = 'My email is ';
$stringTwo = 'emmy123@gmail.com';

// echo $stringOne . $stringTwo;

$name = 'Mario';
$course = 'PHP';

// echo 'Hey my name is' . $name;


// // using variable interpolation:   using double quote allow php notice the variable without concatenation.
// echo "i am a $course developer";   


// // escaping characters: adding qoutes to a string
// echo "did you say your name is \"Mario\"?      ";
// echo 'did you say your email is "emmy123@gmail.com"?';


// // finding characters using index
// echo $name[1];


// // String functions
// echo strlen($stringOne);         // finding length of a string.
echo strtoupper($stringOne . '');        // change string to upper case
echo strtolower($stringOne . '');        // change string to lower case
echo str_replace('m', 'w', $stringTwo);          // replace m(1st arguements) with w(2nd arguements)  in the variable or string(3rd arguments)

?>

<html>
    <head>
        <title> Strings </title>
    </head>
    <body>
     
      
    </body>
</html>

