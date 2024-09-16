<?php

// Function to calculate total price
function calculateTotalPrice($quantity, $price) {
    return $quantity * $price;
}

// Function to check if the product is in stock
function checkStock($quantity) {
    return $quantity > 0;
}

// Function to calculate weekly salary
function calculateWeeklySalary($salary_per_hour, $hours_worked){
    $weekly_salary = $salary_per_hour * $hours_worked;

    if($hours_worked > 40){
        $extra_hour = $hours_worked - 40;
        $extra_pay = $extra_hour * $salary_per_hour * 1.5;
        $weekly_salary += $extra_pay;
    }

    return $weekly_salary;
}

// Function to check attendance
function checkAttendance($hours_worked){
    return $hours_worked > 0;
}




?>
