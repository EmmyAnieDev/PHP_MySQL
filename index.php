<?php

//  //////       TEST 2 

////      TASK:   Simple Inventory Management System


// Include the functions file
include 'functions.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$products = [
    ['name' => 'Laptop', 'quantity' => 3, 'price_per_unit' => 1500],
    ['name' => 'Mouse', 'quantity' => 0, 'price_per_unit' => 20],
    ['name' => 'Keyboard', 'quantity' => 5, 'price_per_unit' => 30],
    ['name' => 'Monitor', 'quantity' => 7, 'price_per_unit' => 150],
    ['name' => 'Adapter', 'quantity' => 7, 'price_per_unit' => 200],
    ['name' => 'Keypad', 'quantity' => 0, 'price_per_unit' => 20],
    ['name' => 'Laptop Stand', 'quantity' => 7, 'price_per_unit' => 80],
    ['name' => 'USB Cable', 'quantity' => 0, 'price_per_unit' => 5],
];

$processedProducts = 0;

foreach ($products as $product) {
    $productName = $product['name'];
    $productQuantity = $product['quantity'];
    $productPrice = $product['price_per_unit'];

    // Use the checkStock function to verify if the product is in stock
    if (!checkStock($productQuantity)) {
        continue; // Skip out of stock products
    } else {
        // Calculate the total price using the function
        $totalPrice = calculateTotalPrice($productQuantity, $productPrice);
        // echo "Product: $productName, Total Price: $$totalPrice <br />";

        $processedProducts++;

        // Break the loop after processing 3 products
        if ($processedProducts >= 3) {
            break;
        }
    }
}


//////        TASK 2


// // Employee Attendance and Salary Management System


// Employee data
$employees = [
    ['name' => 'Alice', 'salary_per_hour' => 20, 'hours_worked' => 45],
    ['name' => 'Bob', 'salary_per_hour' => 15, 'hours_worked' => 38],
    ['name' => 'Charlie', 'salary_per_hour' => 22, 'hours_worked' => 50],
    ['name' => 'Diana', 'salary_per_hour' => 18, 'hours_worked' => 0],
    ['name' => 'Eve', 'salary_per_hour' => 25, 'hours_worked' => 60],
    ['name' => 'Frank', 'salary_per_hour' => 19, 'hours_worked' => 42]
];

$processedEmployee = 0;


foreach ($employees as $employee){
    if(!checkAttendance($employee['hours_worked'])){
        continue;
    }else{
        $total_salary  =  calculateWeeklySalary($employee['salary_per_hour'], $employee['hours_worked']);
        echo "{$employee['name']} earns $$total_salary weekly. <br />";
        $processedEmployee ++;

        if($processedEmployee == 3){
            break;
        }
    }
}



?>
