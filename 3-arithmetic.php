<?php
// Arithmetic Operators: 
// + - * / ** %

// Increment/decrement Operators
// ++, --

// Operator Precedence
// ()
// ** -> power
// * / %
// + -

// Arithmetic Operator
$x = 10;
$y = 3;
$z = null;

// $z = $x + $y;
// $z = $x - $y;
// $z = $x * $y;
// $z = $x / $y;
// $z = $x ** $y;
$z = $x % $y;

echo "{$z} <br>";

// Increment/ decrement Operator
$counter = 0;

$counter++;
$counter--;
$counter += 3;
$counter -= 2;

echo "{$counter} <br>";

// Precedence of Operator

$total = 1 + 2 - 3 * 4 / 5 ** 6;
echo $total;
