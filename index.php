<?php

//  //////       FUNCTIONS
// /// // BLOCK OF CODES THAT CAN BE EXECUTED ONCE TO DO SOMETHING.

function personName(){    //   empty function
    echo 'Hello Developer <br />';
}

personName();



function getName($name, $time = 'morning'){     // function with parameter and also default value
    echo "Hello $name it's $time <br />";
}

getName('mario');     // calling the function passing an argument



function formatProduct($product){     // using return
   return "{$product['name']} cost \${$product['price']} to buy <br />";
}

echo formatProduct(['name' => 'Apple', 'price' => 2.99]);




?>

<html>
    <head>
        <title> Test </title>
    </head>
    <body>
  
    
    </body>
</html>

