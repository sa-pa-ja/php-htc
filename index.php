<?php 
$bool = true;
$string = "Hello my love Lucy";
$integer = 300;
$float = 50.566;

echo get_debug_type($bool), "\n";
echo get_debug_type($string), "\n";

// If this is an integer, increment it by four

if (is_int($integer)) {
    $integer += 100;
}

// To check the value and type of an expression, use the var_dump() function
var_dump($integer);
?>