<?php

echo"----------Task1--------------<br>";
$num_one = -1;
$num_two = 2.5;
$inex=[$num_one, $num_two];
$let_one = "o";
$let_two = "z";
$lett=[$let_one , $let_two];
$str = "El%er0";

// Write Your Code Here
 $str=echo str_replace([($str[(int)$num_two]),($str[$num_one])], [$let_two , $let_one], $str);
echo $str;
 
 echo "<br>";
 echo"----------Task2--------------<br>";
 $str = "Orezle";
echo (ucfirst(strtolower(strrev($str)))) . "<br>";  // Elzero

echo "<br>";
echo"----------Task3--------------<br>";
$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
echo chunk_split(strtolower(str_repeat($str, $num)),$num, $char);
// aaa_aaa_aaa_

echo "<br>";
echo"----------Task4--------------<br>";
$str = "<div><b>Elzero</b></div>";
echo strip_tags($str , "<b>");
// <b>Elzero</b>\
echo "<br>";
echo"----------Task5--------------<br>";
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;
var_dump(substr_count($str, $e, $four));//1
echo "<br>";
var_dump(substr_count($str, $e)); // 2

// 1
// 2
echo "<br>";
echo"----------Task6--------------<br>";
$chars = ["E", "l", "z", "e", "r", "o"];
echo implode("", $chars) . "<br>";
// Output

echo "<br>";
echo"----------Task7--------------<br>";

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
echo ucfirst(strtolower(substr_replace(implode($chars), "", 1, 2)));
