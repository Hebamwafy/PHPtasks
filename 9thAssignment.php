<?php
echo "--------Task 1------------------"."<br>";
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
  ];
  $friends=array_change_key_case($friends);
  echo '<pre>';
  print_r(array_chunk($friends,2, true));
  echo '</pre>';

  echo "--------Task 2------------------"."<br>";

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];
echo '<pre>';
print_r(array_change_key_case(array_combine($codes , $means)));
echo '</pre>';

echo "------------Task 3---------------<br>";
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
  ];
  echo '<pre>';
  $friends=(array_flip(array_reverse($friends, true)) );
  print_r(array_change_key_case($friends));
  echo '</pre>';

  echo "------------Task 4---------------<br>";
  function add($carry , $item)
  {
    return $carry+$item;
  }
  $nums = [10, 20, 30];
  echo array_reduce($nums,"add")."<br>";
  echo array_sum($nums)."<br>";

  echo "------------Task 5---------------<br>";
  $nums = [5, 10, 20, 5, 30, 40];
  $result=0;
  for ($i=0 ; $i<count($nums) ; $i++)
  {
    if ($nums[$i]==5)
    {
        continue;
    }
    $result+=$nums[$i];
  }
  echo $result ;

 echo "<br>------------Task 6---------------<br>";
  $chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
$x=count($chars)*strlen($char);
echo '<pre>';
print_r(array_pad($chars,$x,$char[$zero]));
echo '</pre>';

echo "<br>------------Task 7---------------<br>";
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names)."<br>";
next($names)."<br>";

echo current($names) . "<br>"; // "Sayed"
end($names)."<br>";
echo current($names) . "<br>"; // "Ali"
reset($names);
echo current($names) . "<br>"; // "Osama"
end($names);
prev($names);
echo current($names) . "<br>"; // "Mahmoud"

echo "<br>------------Task 8---------------<br>";
$chars = ["A", "B", "C"];

// 1st method
array_push($chars ,"D");
echo'<pre>';
print_r($chars);
echo'</pre>';
//2nd method
echo'<pre>';
print_r(array_pad($chars,4,"D"));
echo'</pre>';

//3rd method 
$chars[]="D";
echo'<pre>';
print_r($chars);
echo'</pre>';
//4rth method 
$chars = ["A", "B", "C"];
$add=[4=>"D"];
echo'<pre>';
print_r(array_merge($chars ,$add ));
echo'</pre>';

echo "<br>------------Task 9---------------<br>";
$nums = [1, 2, 3, 4, 5, 6];
echo'<pre>';
print_r(array_slice($nums,-5,-2));
echo '<pre>';

echo "<br>------------Task 10---------------<br>";
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here
array_splice($mix ,count($nums),count($nums),$nums);
print_r($mix);

echo "<br>------------Task 11---------------<br>";
// I will implement a function calcualte the length of the array manually 
function length($array)
{
    $num =0;
   while ($array)
   {
    if(empty($array[$num]))
    {
        break;
    }
    $num++;
   }
    return $num;
}
$arr = ["A", "B", "C", "D", "E"];
$count=0;
for ($i=0 ; $i<length($arr) ; $i++)
{
    $count++;
}
echo $count;
echo "<br>------------Task 12---------------<br>";
$nums = [11, 2, 10, 7, 20, 50];
$result=0;
for ($i=0 ; $i<length($nums); $i++)
{   
    $result+=$nums[$i];
}
echo $result;
echo "<br>------------Task 13---------------<br>";
$nums = [10, 100, -20, 50, 30];
$max = $nums[0];
for ($i=0 ; $i<length($nums); $i++)
{
    if ($nums[$i]>$max)
    {
        $max=$nums[$i];
    }
}
echo $max;

echo "<br>------------Task 14---------------<br>";
$nums = [10, 100, -20, 50, 30];

$min = $nums[0];
for ($i=0 ; $i<length($nums); $i++)
{
    if ($nums[$i]<$min)
    {
        $min=$nums[$i];
    }
}
echo $min;

echo "<br>------------Task 15---------------<br>";
$chars = ["o", "r", "e", "z", "l", "E"];
$chars= array_reverse($chars);
echo'<pre>';
print_r(implode("",$chars));
echo '</pre>';
echo "<br>------------Task 16---------------<br>";

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$mix=array_slice($mix ,3 ,7 , false);
$z=[];
for ($i=0 ; $i<count($mix); $i++)
{
    if ($mix[$i]%2==0)
    {
        continue;
    }
    else
    array_push($z,$mix[$i]);
}
echo'<pre>';
print_r($z);
echo'</pre>';
echo "<br>------------Task 17---------------<br>";
$nums = [1, 2, 3, 4, 5, 6];
$x=[];
for ($i=0 ; $i<count($nums);$i++)
{
    if(in_array($nums[array_rand($nums)],$x,true))
    {
        $i--;
        continue;
    }
    array_push($x ,$nums[array_rand($nums)]);
}
echo '<pre>';
print_r($x);
echo '</pre>';

echo "<br>------------Task 18---------------<br>";
$title = "E&z\$r0 W\$b Sch00&";
$title=str_replace(["&","$","0"],["l","e","o"],$title);
echo $title;
