<?php

//  //////       VRIABLE SCOPE
// /// // GLOBAL SCOPE

$name = 'Mario';       // variable created outside a function or in the file can be accesed globally.

function personName(){   

    global $name;                // use the keyword global.
    // $name = 'Yoshi';            // overide the global variable value
    echo "Hello $name <br />";

}

personName();
echo $name . '<br \>';              // if the global variable value has be overidden, this will echo out the overidden data.


function sayBye($name){              // local params
    $name ='Jyu';          
    echo "bye $name <br />";
}

sayBye($name);                      // passing the global variable as the argument of the function.



//////            LOCAL SCOPE

function personAge(){

    $age = 26;     // variable created inside the function can only be used inside the function making it a local variable
    echo "you're $age years old <br />";

}

personAge();




?>

<html>
    <head>
        <title> Test </title>
    </head>
    <body>
  
    
    </body>
</html>

