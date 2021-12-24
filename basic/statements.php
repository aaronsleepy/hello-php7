<?php
// 조건문
$foo = 5;

if ($foo < 1) {
    echo "1"."\n";
} elseif ($foo < 3) {
    echo "2"."\n";
} else {
    echo "3"."\n";
}

// 반복문
$collection = ['apple', 'banana', 'tomato'];
foreach ($collection as $fruit) {
    echo "{$fruit}\n";
}

$dict = ['red' => 'apple', 'apple' => 'delicious'];
foreach ($dict as $key => $val) {
    echo "{$key} => {$val}\n";
}
