<?php
// 1) String Data Type
$name = "Apil Adhikari";
$food = "pizza";
$email = "test123@gmail.com";
//String Literal(printing the variable directly) echo $name;

// INT Data Type
$age = 20;
$users = 2;
$quantity = 4;

// Float Data Type
$gpa = 3.5;
$price = 5.99;
$tax_rate = 5.3;

// Boolean Data Type : Either TRUE or FALSE
$employed = true;
$online = false;
$for_sale = true;

$total = null;


echo "Hello {$name} <br>";
echo "You like {$food} <br>";
echo "Your email is {$email} <br>";

echo "You are {$age} years old <br>";
echo "There are {$users} users online <br>";
echo "You would like to buy {$quantity} items <br>";

echo "Your gpa is {$gpa} <br>";
echo "Your pizza is \${$price} <br>";
echo "Your tax rate is {$tax_rate}% <br>";

echo "Online Status : {$online} <br>";

echo "You have ordered  {$quantity}x {$food}s <br>";
$total = $quantity * $price;
echo "Your total is: \${$total}";
