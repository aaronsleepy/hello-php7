<?php
// array
$foo = ['bar', 'baz'];
var_dump($foo);
echo "{$foo[0]}\n";

// associative array
$foo = ['foo' => 'bar', 'baz' => 'qux'];
echo "{$foo['baz']}\n";

// Object
$foo = new stdClass();
$foo->property = 'bar property';
var_dump($foo);
echo "{$foo->property}\n";
