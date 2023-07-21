<?php
echo "-------------Task1:-------------<br>";
echo "<br>";
$name = "elzero";
$$name = "Web";

//method 1
echo $$name ;
echo "<br>";
//method 2
echo $elzero;
echo "<br>";
//method 3
echo "Web<br>";
//method 4
echo "<br>";
echo "-------------Task2:-------------<br>";
echo "<br>";
$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100

echo "<br>";
echo "-------------Task3:-------------<br>";
echo "<br>";
echo PHP_VERSION;
echo "<br>";
echo PHP_OS_FAMILY;
echo "<br>";
echo PHP_INT_MAX;
echo "<br>";
echo DEFAULT_INCLUDE_PATH;

echo "<br>";
echo "-------------Task4:-------------<br>";
echo nl2br("
int
float
bool
string 
null
true
false
object
void
mixed ");
echo "<br>";
echo "-------------Task5:-------------<br>";
echo "<br>";
 
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
