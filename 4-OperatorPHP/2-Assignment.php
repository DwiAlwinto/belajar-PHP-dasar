<?php
// Assign(a=b) 
// Addtion(a +=b)
// Subtraction (a-b)
// Multiplication(a*=b)
// Divison(a/=b)
// Modulus (a%=b)

// !Assign 
    $a = 2;
    $b = 3;
    $a = $b;
    echo $a; //ini hasilnya 3(karena nilai a = nilai b. nilai b itu 3)
    echo "<br>";
    echo "<br>";

// !Addition 
$a = 2;
$b = -3;
$a += $b; //maksudya:  a = a+b
echo $a; // hasilnya -1
echo "<br>";

//!Multipaction
$a = 2;
$b = -3;
$a *= $b; 
echo $a; // hasilnya -1
echo "<br>";

//!Mudolus
$a = 11;
$b = 3;
$a %= $b; 
echo $a; //
echo "<br>";