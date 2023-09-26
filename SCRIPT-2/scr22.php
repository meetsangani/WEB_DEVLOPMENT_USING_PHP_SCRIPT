<?php
function calculateCircleArea($radius) {
    $pi = 3.14159; 
    $area = $pi * ($radius * $radius);
    return $area;
}

$radius = 5;

$circleArea = calculateCircleArea($radius);

echo "The area of a circle with radius $radius is: $circleArea square units";
?>
