<?php
echo"<br>";
echo"-----------Task1:--------<br>";
echo"<br>";
echo (int)(15.2 + 14.7 )+ (int)(10.5 + 10.5); // 50
echo"<br>";
echo gettype((int)(15.2 + 14.7 )+(int) (10.5 + 10.5)); // Integer

echo"<br>";
echo"-----------Task2:--------<br>";
echo"<br>";
// Method One
echo gettype(100);
// Method Two
echo"<br>";

echo"<br>";
echo"-----------Task3:--------<br>";
echo"<br>";
echo "Hello \"Elzero\" \\\\  \" We Love \" \"$\$PHP\"" ;

echo"<br>";
echo"-----------Task4:--------<br>";
echo"<br>";

echo nl2br("We \n Love \n Elzero \n Web \n School");
// Needed Output

echo"<br>";
echo"-----------Task5:--------<br>";
echo"<br>";
// Needed Output
echo<<<'Now'
Hello "'Elzero'" 
We Love $Programming$  
Languages Specially "PHP" 
Now;

echo"<br>";
echo"-----------Task6:--------<br>";
echo"<br>";

$something = "Programming";

echo <<<"Here"
Hello \PHP\
We Love $something
Here;
// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
echo"<br>";
echo"-----------Task7:--------<br>";
echo"<br>";
echo (bool)"Hello PHP";
$r= (bool)"Hello PHP"+0;
echo '<br>';
echo gettype($r);

// Needed Output
echo"<br>";
echo"-----------Task8:--------<br>";
echo"<br>";
echo '<pre>';
print_r([
        "FrontEnd"=>[
         0=>"HTMl" ,
         1=>"CSS" ,
         "JS"=>["vuejs"=>[
             2=>"v2",
             3=>"v3"
         ],
             0=>"reactjs",
              1=>"Svelte"]
        ],
         "BackEnd"=>
         [
            0=>"PHP",
            1=>"MySQl",
            2=>"Security"
        ],
            "Git",
            "Github",
           "Testing"=>["Unit Testing","End To End","Integration"]
         ]);
         echo '</pre>';