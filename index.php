<?php

//  //////       REQUIRE && INQUIRE

// // include another file into this file. if file does not exists it skips and run continue running the scripts
include('ninjas.php');     // used for optional files


// // include another file into this file. if file does not exists it returns a fatal error and the script stops execution.
require 'ninjas.php';     // used for manadatory files
 
echo 'end of php';


?>

<html>
    <head>
        <title> Test </title>
    </head>
    <body>

    <?php  include 'content.php' ?>
    <?php  include 'content.php' ?>
    <?php  include 'content.php' ?>
    
    </body>
</html>

