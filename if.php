<?php
$a = 100;
$b = 200;
$c = 100;

/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/
//method 1:
if ($b>$a && $a===$c && $a+ $c ===$b)
{
    echo "YES";
}else {
    echo "No";
}
 echo "<br>";
//method2 :

if ($b>$a)
{
    echo "YES";

}
    else if($a===$c)
    {
      echo "YES";
    }
    else if($a+ $c ===$b){
        echo "YES";
    }
    else {echo "NO";}

echo "<br>";
echo "---------------------------";
echo "<br>";
echo "Task2:";
echo "<br>";
// Test Case 1
$a = 100;
$b = 200;
$c = 300;

// A Is Not Larger Than B Or C
switch($a){
    case 100:
        echo "A Is Not Larger Than B Or C";
        break;
    case 200:
        echo " A Is Larger Than B ";
        break;
    case 200:
        echo " A Is Larger Than C ";
        break;
}

echo "<br>";
echo "---------------------------";
echo "<br>";
echo "Task3:";

$admins = ["Osama", "Ahmed", "Sayed"];

// Input Name "Osama"

// Needed Output
//"The Request Method Is Post And Username Is Osama"
//"This Username Osama Is Admin"
?>

<?php
  if($_SERVER["REQUEST_METHOD"==="POST"])
  $username="khaled";

  $admins = ["Osama", "Ahmed", "Sayed"];
  echo "The Request Method Is Post And Username Is $username";
if ($username=="osama"||$username=="Ahmed"||$username=="Sayed")
{
   echo "This Username $username Is Admin";
}?> 
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
<?php
// Input Name "Osama"
// Needed Output
echo"<br>";
echo"--------------------";
echo"<br>";
echo "TASK6:";
echo"<br>";
$genre = "Hack And Slash";
switch($genre)
{
    case "RPG":
        echo "I Recommend Ys Games";
        break;
    case "Hack And Slash":
        echo "I Recommend Castlevania Games";
        break;
    case "FPS":
        echo"I Recommend Uncharted Games";
        break; 
    case "Platform":
        echo "I Recommend Megaman Games";
        break;
    case "Puzzle":
        echo "I Recommend Megaman Games";
        break;
    default:
    echo "I Recommend Shadow Of Mordor And Shadow Of War";

}
echo"<br>";
echo"--------------------";
echo"<br>";
echo "TASK7:";
echo"<br>";
$num_one = 23;
$num_two = 5;
$op = "+";
switch($op){
    case "+":
        echo $num_one + $num_two ;
        break;
    case "-":
        echo $num_one - $num_two;
        break;
    case "*":
        echo $num_one * $num_two;
        break;
    case "/":
         echo $num_one / $num_two;
        break;
    default:
    "Unkown Operation"; 
    }
    echo"<br>";
echo"--------------------";
echo"<br>";
echo "TASK8:";
echo"<br>";

$day = "Sat";
 if ($day=="Sat"||$day=="Sun"||$day=="Mon")
 {
    echo "We Are Open All The Day";  
 }else if($day=="Tue"||$day=="Wed"){
    echo "We Are Open From 08:12";
 }else if($day=="Thu"||$day=="Fri"){
    echo "We Are Closed";
}else{
    echo "Unknown Day";
}
