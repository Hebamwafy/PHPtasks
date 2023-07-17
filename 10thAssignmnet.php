<?php
echo "-----------Task 1--------------<br>";

echo rand(11,19)."<br>";

echo "-----------Task 2--------------<br>";

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
echo $friends[rand(0,3)];

echo "-----------Task 3--------------<br>";
$num1 = 11.5; // 11
echo round($num1 ,1 ,PHP_ROUND_HALF_DOWN)."<br>"; //11
$num2 = 9.4898; // 9.5
echo round($num2 ,1)."<br>";
$num3 = -7.5; // -7
echo round($num3,0, PHP_ROUND_HALF_DOWN)."<br>";

echo "-----------Task 4--------------<br>";
$z=[];
$x=[];
for($i=0 ; $i<count(filter_list()); $i++)
{
    array_push($z ,filter_list()[$i]);
    array_push($x ,filter_id(filter_list()[$i]));
    
}
echo '<pre>';
print_r(array_combine($x,$z));
echo '</pre>';

echo "-------------task 5-------------<br>";
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";
filter_var($url1, FILTER_VALIDATE_URL);
if(filter_var($url1, FILTER_VALIDATE_URL)==false)
{
    echo "Not A Valid URL<br>";
}

filter_var($url2, FILTER_VALIDATE_URL);
if(filter_var($url2, FILTER_VALIDATE_URL)==false)
{
    echo "Not A Valid URL<br>";
}else{
    echo "A Valid URL<br>";
}

filter_var($url3, FILTER_VALIDATE_URL);
if(filter_var($url3, FILTER_VALIDATE_URL)==false)
{
    echo "Not A Valid URL<br>";
}else{
    echo "A Valid URL<br>";
}

filter_var($url4, FILTER_VALIDATE_URL);
if(filter_var($url4, FILTER_VALIDATE_URL)==false)
{
    echo "Not A Valid URL<br>";
}else{
    echo "A Valid URL<br>";
}

echo "-------------task 6-------------<br>";
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1, FILTER_SANITIZE_URL)."<br>";
echo filter_var($url2, FILTER_SANITIZE_URL)."<br>";
echo filter_var($url3, FILTER_SANITIZE_URL)."<br>";
echo filter_var($url4, FILTER_SANITIZE_URL)."<br>";
