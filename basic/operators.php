<?php
// 대입 연산자
$foo = 'bar';
$foo .= 'baz';
echo "{$foo}\n";

// 산술 연산자
$foo = 1 + "2";
echo "{$foo}\n";

// 비교 연산자
var_dump(0 == false);
var_dump(0 === false);

// 논리 연산자
var_dump(true && false);
var_dump(true || false);
