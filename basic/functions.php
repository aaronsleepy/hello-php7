<?php
// y = 2x + 1
function equation_of_line($var)
{
    return 2 * $var + 1;
}

echo equation_of_line(5)."\n";


$name = "socurites";
function greetings($name="aaron", $greeting = "Hello")
{
    return "{$greeting}, {$name}";
}
echo greetings($name)."\n";

// closure
$step = 2;
$increment = function($var) use ($step) {
    return $var + $step;
};

$result = array_map($increment, [1, 3, 5]);
print_r($result);
