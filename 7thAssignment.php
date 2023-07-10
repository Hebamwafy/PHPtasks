<?php
echo "Task 1:<br>";
echo "<br>";
// Write Function Content Here
function greeting($name , $gender=" ")
{
    if ($gender=="Male")
    {
        echo "Hello Mr $name <br>";

    }else if($gender=="Female"){
        echo "Hello Miss $name <br>";
    }else
    echo "Hello $name <br>";
}
// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
echo "<br>";
echo "-----------Task 2----------:<br>";
echo "<br>";
// Write Function Content Here
function words()
{
  $word= func_get_args();
  for ($i=0 ; $i<count($word);$i++)
  {
    $all.=$word[$i] ." ";
  }
  return $all;
}
echo words("Hello", "Elzero", "Web", "School");

echo "<br>";
echo "-----------Task 3----------:<br>";
echo "<br>";

// Write Function Content Here
function sum()
{
  $nums= func_get_args();
  for ($i=0 ; $i<count($nums);$i++)
  {
    if($nums[$i]==10)
    {
        $nums[$i]=20;
    }
    else if($nums[$i]==5)
    {
        continue;
    }
      $total+=$nums[$i];
  }
  return $total;
}
// Needed Output
echo sum(10, 12, 5, 6, 6, 10); // 64

echo "<br>";
echo "-----------Task 4----------:<br>";
echo "<br>";
// Write Function Content Here

function multiply ():int
{
    $mult= func_get_args();
    $total=1;
    for ($i=0 ; $i<count($mult) ; $i++)
    {
       
        if (is_string($mult[$i]))
        {
        continue;
        }
        else 
        $total *= (int)$mult[$i] ;
    }
    return $total ;
}
// Needed Output
echo multiply(10, 20);//200
echo "<br>"; 
echo multiply("A", 10, 30); // 300
echo "<br>";
echo multiply(100.5, 10, "B"); // 1000

echo "<br>";
echo "-----------Task 5----------:<br>";
echo "<br>";
function check_status($a, $b, $c) {
    // Function Code Here
    if(is_numeric($a)&&is_string($b)&& is_bool($c))
    {
        if($c==1){
            echo "Hello $b, Your Age Is $a, You Are Available For Hire"  ;
        }else if($c==0)
         echo "Hello $b, Your Age Is $a, You Are Not Available For Hire"  ;
    }
    else if(is_numeric($b)&&is_string($a)&& is_bool($c))
    {
        if($c==1){
            echo "Hello $a, Your Age Is $b, You Are Available For Hire"  ;
        }else if($c==0)
         echo "Hello $a, Your Age Is $b, You Are Not Available For Hire"  ;   
    }
    else if(is_numeric($b)&&is_string($c)&& is_bool($a))
    {
        if($a==1){
            echo "Hello $c, Your Age Is $b, You Are Available For Hire"  ;
        }else if($a==0)
         echo "Hello $c, Your Age Is $b, You Are Not Available For Hire"  ;   
    }
    else if(is_numeric($c)&&is_string($b)&& is_bool($a))
    {
        if($a==1){
            echo "Hello $b, Your Age Is $c, You Are Available For Hire"  ;
        }else if($a==0)
         echo "Hello $b, Your Age Is $c, You Are Not Available For Hire"  ;   
    }
  }
  
  // Needed Output
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo"<br>";
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo"<br>";
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo"<br>";
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

echo "<br>";
echo "-----------Task 6----------:<br>";
echo "<br>";

// Write Function Content Here
function calculate ($a , $b , $c="a")
{
   if ($c=="a"||$c=="add") 
   {
     $result = $a+$b;
   }else if ($c=="s"|| $c=="subtract")
   {
    $result = $a-$b;
   }else if ($c=="m"|| $c=="multiply")
   {
    $result = $a*$b;
   }else 
   {
    echo "Unknown operation!";
   }
   return $result ;

}
// Needed Output
echo calculate(10, 20); // 30
echo "<br>";
echo calculate(10, 20, "a"); // 30
echo "<br>";
echo calculate(10, 20, "s"); // -10
echo "<br>";
echo calculate(10, 20, "subtract"); // -10
echo "<br>";
echo calculate(10, 20, "multiply"); // 200
echo "<br>";
echo calculate(10, 20, "m"); // 200

echo "<br>";
echo "-----------Task 7----------:<br>";
echo "<br>";
function calculate (int $num_one, int $num_two) :float
{
    return $num_one + $num_two;
}
  
  echo calculate(20, 10); // 30
  echo"<br>";
  echo gettype(calculate(20, 10)); // Double

  echo "<br>";
echo "-----------Task 8----------:<br>";
echo "<br>";
$message = 'Hello';

echo $message;

$$message = &$message;

// Write Your Code Here
$message = function ($message) {
    $$message = $message;
    return " $message";
};
echo $Hello('Osama'); // Hello Osama

echo "<br>";
echo "-----------Task 9----------:<br>";
echo "<br>";
//anonymous function
$greet1 = function($someone){

    return "Hi $someone";
};
    echo $greet1("osama");
    echo "<br>";
//arrow function 
$greet= fn($someone) => "Hi $someone";

  echo $greet("Osama");