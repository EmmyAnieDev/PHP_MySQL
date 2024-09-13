<?php

// // loops

for ($i = 0; $i < 10; $i++)
{
    // echo 'i is lesser than 10   ';
}


$names = ['John', 'Derek', 'Tommy', 'Kelvin', 'Francine'];

for ($i = 0; $i < count($names); $i++)
{
    // echo 'i is lesser than 10   ';
}

foreach($names as $name)  // looping through each items in the array
{
    // echo $name . '<br />';
}

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

foreach($products as $product)  // looping through each items in the array
{
    // echo $product['name'] . ' - ' . $product['price'] . '<br />';
}

$value = 1;
$totalProduct = count($products);

while ($value < $totalProduct)     // while loop runs until a conditions return true.
{
    // echo "value [$value] is lower than length of products [$totalProduct] <br />";
    $value++;
    if(($value == $totalProduct)){
     //   echo "value [$value] is equal to length of products [$totalProduct]";
    }
}


?>

<html>
    <head>
        <title> Loops </title>
    </head>
    <body>
     <h1>products</h1>
      <ul>
        <?php foreach($products as $product) { ?>
            <h3> <?php echo $product['name'] ?> </h3>
            <p> <?php echo $product['price'] ?> </p>
        <?php } ?>
      </ul>
    </body>
</html>

