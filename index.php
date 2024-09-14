<?php

//  //////       TEST 1
// // list of students using assiociate multi-dimensional array
$students = [
    [
        'name' => 'Shaun',
        'grades' => [
            'math' => 75,
            'english' => 86,
            'physics' => 49,
            'biology' => 62
        ]
    ],
    [
        'name' => 'Mairo',
        'grades' => [
            'math' => 64,
            'english' => 78,
            'physics' => 55,
            'biology' => 69
        ]
    ],
    [
        'name' => 'Crystal',
        'grades' => [
            'math' => 89,
            'english' => 92,
            'physics' => 85,
            'biology' => 77
        ]
    ],
    [
        'name' => 'Ryu',
        'grades' => [
            'math' => 13,
            'english' => 61,
            'physics' => 30,
            'biology' => 48
        ]
    ]
];



// loop through to calcaulate the average grade of each students
// foreach ($students as $student)
// {
//     $totalGrades = $student['grades']['math'] + $student['grades']['english'] + $student['grades']['physics'] + $student['grades']['biology'];
   
//     $studentName = $student['name'];

  


//     echo 'total grades by each student ';
//     echo "$studentName - $totalGrades\n";
   

//     $averageGrade = $totalGrades / count($student['grades']);


//     echo "$averageGrade <br />";

//     if($averageGrade >= 50)
//     {
//         echo "$studentName average result is $averageGrade so student passed  <br />";
//     }
//     else
//     {
//         echo "$studentName average result is $averageGrade so student falled <br />";
//     }


// }

// echo '<br />';
// echo '<br />';
// echo '<br />';

///           TEST 2
$products = [
    [
        'product_name' => 'Laptop',
        'quantity' => 5,
        'price_per_unit' => 1200
    ],
    [
        'product_name' => 'Mouse',
        'quantity' => 0, 
        'price_per_unit' => 25
    ],
    [
        'product_name' => 'Keyboard',
        'quantity' => 10,
        'price_per_unit' => 45
    ],
    [
        'product_name' => 'Monitor',
        'quantity' => 3,
        'price_per_unit' => 300
    ],
    [
        'product_name' => 'USB Cable',
        'quantity' => 20,
        'price_per_unit' => 8
    ]
];


// foreach($products as $product){


//     $productName = $product['product_name'];
//     $productQuantity = $product['quantity'];
//     $productPrice = $product['price_per_unit'];
//     $totalProductPrice =   $productQuantity * $productPrice;

  

//     if($productQuantity < 1){
//         echo "$productName is out of stock <br />";
//     }else{
//         echo "$productName is in stock, and total products cost $totalProductPrice  <br />";
//     }
// }


$employers = [
    [
        'name' => 'Terry',
        'salary' => 15,
        'hours' => 42,
    ],
    [
        'name' => 'Derek',
        'salary' => 8,
        'hours' => 38,
    ],
    [
        'name' => 'Sophia',
        'salary' => 13,
        'hours' => 29,
    ],
    [
        'name' => 'Tems',
        'salary' => 17,
        'hours' => 18,
    ],
    [
        'name' => 'Adam',
        'salary' => 19,
        'hours' => 47,
    ],
    [
        'name' => 'Joy',
        'salary' => 19,
        'hours' => 52,
    ]
];

foreach($employers as $employer){
    $employerName = $employer['name'];
    $employerSalary = $employer['salary'];
    $employerHours = $employer['hours'];
    $weeklySalary = $employerSalary * $employerHours;


    if($employerHours > 40){

        $overTimeHour = $employerHours - 40;
        $overTimePay = $overTimeHour * $employerSalary * 1.5;
        $totalSalary = $weeklySalary + $overTimePay ;

        echo "employer name is $employerName, regular salary is $$weeklySalary, overtime pay is $$overTimePay and total salary is $totalSalary <br />";
    }else{

        
        echo "employer name is $employerName, regular salary is $$weeklySalary and total salary is $$weeklySalary <br />";
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

