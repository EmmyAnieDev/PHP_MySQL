<?php

// // multi-dimensional arrays

// // index multi-dimensional array
$blogs = [    
    ['mario party', 'mario', 'lorem', 30],
    ['mario kart cheats', 'toad', 'lorem', 25],
    ['zelda hidden chest', 'link', 'lorem', 50],
];      

// print_r($blogs);
// print_r($blogs[0]);
// print_r($blogs[0][2]);

// // associate multi-dimensional array
$blogs2 = [    
    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem','likes' =>  25],
    ['title' => 'zelda hidden chest', 'author' => 'link', 'content' => 'lorem','likes' =>  50],
];      

// print_r($blogs2);
// print_r($blogs2[2]['title']);
// $blogs2[2]['title'] = 'always on the moon';
// print_r($blogs2[2]['title']);
// echo count($blogs2[1]);

$popped = array_pop($blogs2);     // POP THE LAST ARRAY AND STORE.
print_r($popped);


?>

<html>
    <head>
        <title> Strings </title>
    </head>
    <body>
     
      
    </body>
</html>

