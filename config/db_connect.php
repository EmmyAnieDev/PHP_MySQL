<?php

    // Enable error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Use environment variables or external config for sensitive info
    $db_host = 'localhost';
    $db_user = 'emmy';
    $db_pass = 'test1234';
    $db_name = 'ninja_pizza';

    // connect to database using mysqli
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // check connection
    if(!$conn){
        // Log the error for debugging and show a generic message
        error_log("Connection error: $mysqli_connect_error() ");
        echo "Connection to database failed. Please try again later.";
    }

?>