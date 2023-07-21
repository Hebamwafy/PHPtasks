<?php
$a=10;
for ($i=0 ; $a>=0 ; $a--)
{
    echo $a ;
    echo"<br>";
}
echo"<br>";
echo"#####################";
echo "task2: <br>";
$index=0;
while ($index<20)
{
    echo $index+=2;
    echo"<br>";
};
//method do while
 
do {
    echo $index+=2;
    echo"<br>";
}while ($index<20);

//method for 
for ($i=0; $i<=20 ; $i+=2)
{
    echo $i;
    echo"<br>";
}
echo"<br>";
echo"#####################";
echo "task3: <br>";
$num = 2;
$z=1;
echo $z;
echo"<br>";
while ($num < 520) {

 $z=($z*2)+2;
 $num=$z;
 if($z>=520){
    break;
 }
  echo $num;
  echo"<br>"; 
}
echo"<br>";
echo"#####################";
echo "task4: <br>";
$start = 10;
$end = 0;
$stop = 3;
for ($i=$start ; $i>=$stop; $i--)
{
    if($i<$start)
    {
        echo $end.$i;
        echo"<br>";
    }else{
    echo $i;
    echo"<br>";
    }
}
echo"<br>";
echo"#####################";
echo "task5: <br>";
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
for($i=0;$i<7;$i++){
    if($mix[$i]!=1 && is_numeric($mix[$i])){
        echo $mix[$i]."<br>";
    }else{
        continue;
    }
}

echo"<br>";
echo"#####################";
echo "task6: <br>";
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
$names = [ "Ahmed", "Sayed" , "Osama" ,"Maher" ];
foreach ($money as $names=>$pay):
echo "The Name Is $names And I Need $pay Pound From Him";
echo"<br>";
endforeach;


echo"<br>";
echo"#####################";
echo "task7: <br>";

$mix = [1, 2, "A", "B", "C", 3, 4];
$c= count($mix);
for ($i=0 ;$i<$c ; $i++ )
{
   if($mix[$i]!=1 && is_numeric($mix[$i]))
   {
    echo $mix[$i];
    echo"<br>";
   }else {
    continue;
   }


}


echo"<br>";
echo"#####################";
echo"<br>";
echo "task8:<br>";
$nums = [1, 13, 12, 20, 51, 17, 30];
for ($i=0; $i<=6 ; $i++){
 if ($nums[$i]%2==0)
 {
    $z=$nums[$i]/2;
    echo $z;
    echo"<br>";
 }
}

echo"<br>";
echo"#####################";
echo"<br>";
echo "task9:<br>";
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
$help_num--;
echo $names[$help_num];
echo"<br>";
$help_num--;;
echo $names[$help_num];
echo"<br>";

echo"<br>";
echo"#####################";
echo"<br>";
echo "task10<br>";

$help_num = 4;
$nums = [2, 4, 5, 6, 10];
foreach($nums as $j){
    echo $j + $nums[$help_num];
    $help_num--;
    echo"<br>";
}
