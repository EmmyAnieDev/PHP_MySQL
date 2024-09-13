<?php

// // Indexed arrays:    We use index to access and manipulate the arrays.

$peopleOne = ['Shaun', 'Mairo', 'Crystal', 'Ryu'];

// print_r($peopleOne);    // print readeable


$peopleTwo = array('Adam', 'Becky', 'Helen', 'Zara');

$allPeople = array_merge($peopleOne, $peopleTwo);    // merging two arrays

// print_r($allPeople);

// echo $allPeople;

$ages = [20, 34, 18, 27];   // can't use echo since it returns a string
// print_r($ages);   // print readeable

$ages[1] = 22;   // modify the array for a particular index
// print_r($ages); 

$ages[] = 44;    // add a new data to the array
// print_r($ages)

array_push($ages, 70);    // add a new data to the end of the array. 
// print_r($ages);

// echo count($ages);




//  // associative arrays:       these are key value pairs

$ninjasOne = ['shaun'=>'black', 'mario'=>'orange', 'luigi'=>'red'];
// print_r($ninjasOne);

// echo $ninjasOne['mario'];    // access a value using its key

$ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow');
// print_r($ninjasTwo);

$ninjasTwo['ball'] = 'grey';    // add a new value
// print_r($ninjasTwo);

$ninjasTwo['peach'] = 'blue';    // override or modify a value
// print_r($ninjasTwo);

// echo count($ninjasOne);

$totalNinjas = array_merge($ninjasOne, $ninjasTwo);
print_r($totalNinjas);




// // multidimensional arrays
?>

<html>
    <head>
        <title> Strings </title>
    </head>
    <body>
     
      
    </body>
</html>

