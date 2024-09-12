<?php

define('GENDER', 'Male');   // defining a constant variable.

$name = 'Yoshi';      // string variable
$age = 30;            // int variable

?>

<html>
    <head>
        <title> Variables </title>
    </head>
    <body>
        <h1> User Profile page </h1>
        <div>
        <?php echo $name . ' is ' . $age . ' years old' . ' and gender is ' . GENDER ; ?>
        </div>
    </body>
</html>
