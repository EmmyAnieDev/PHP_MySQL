<?php

//  //////       BREAK AND CONTINUE

$products = [
    [
        'product_name' => 'Laptop',
        'price' => 1200
    ],
    [
        'product_name' => 'Mouse', 
        'price' => 25
    ],
    [
        'product_name' => 'Keyboard',
        'price' => 45
    ],
    [
        'product_name' => 'Monitor',
        'price' => 300
    ],
    [
        'product_name' => 'USB Cable',
        'price' => 8
    ],
    [
        'product_name' => 'Adapter',
        'price' => 430
    ]
];

foreach($products as $product){
    $productName = $product['product_name'];
    $productPrice = $product['price'];

    if($productName === 'Monitor'){
        break;   // stop the loop
    }

    if($productPrice === 25){
        continue;    // don't return the product with price at 15 and then continue the loop
    }

    echo "$productName is seen before Monitor.  <br />";
    

}


echo "loop stopped as Monitor has been seen. <br />";






?>

<html>
    <head>
        <title> Test </title>
    </head>
    <body>
  
    
    </body>
</html>

