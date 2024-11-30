<?php
function calculateArea($length, $width) {
    return $length * $width;
}

$width = 9;
$length = 2;

$area = calculateArea($length, $width);

echo "The area of a rectangle with a width of $width and  $length is $area.";
?>
