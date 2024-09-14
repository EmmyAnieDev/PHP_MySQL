<?php

//  //////       CONDITIONAL STATEMENT

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

    if ($product['price'] < 50){
        echo "$productName is cheap <br/ >";
    }elseif($product['price'] < 500 && $product['price'] > 350){
        echo "$productName is a bit expensive <br/ >";
    }else{
        echo "$productName is expensive <br/ >";
    }
}






?>

<html>
    <head>
        <title> Test </title>
    </head>
    <body>
  
    
    </body>
</html>

