<?php
echo "--------------Task 1--------------------<br>";
//echo round (filesize("10thAssignment.php")/1024/1024/1024/1024 , 2)."<br>";
echo round (disk_total_space("/Users/heba")/1024/1024/1024/1024 , 2)."<br>";

echo "--------------Task 2--------------------<br>";
echo "Size In Megabyte Is".round(filesize("6thAssignment.php")/1024/1024,8)."<br>";
echo "Size In kilobyte Is".round(filesize("6thAssignment.php")/1024 ,2)."<br>";

echo "--------------Task 3--------------------<br>";

mkdir("Programming/Php", 0711, true);
rmdir("Programming/Php");
if(file_exists("Programming/Php")==false)
{
    echo "Directory Programming/PHP Removed<br>";
}
rmdir("Programming");
if(file_exists("Programming")==false)
{
    echo "Directory Programming Removed<br>";
}

echo "--------------Task 4--------------------<br>";

function change_permissions( $file_name )
{
    
    if(is_dir($file_name)==true)
    {
        echo "This Is Directory And Only Files Allowed<br>";
    }
    elseif(pathinfo($file_name)["extension"]!="txt")
    {
       echo "File Extension Is Not Txt<br>";
    }
    else
    {
        clearstatcache();  
        chmod($file_name,0700);
        echo "permission Changed!<br>";
        
    }
    
    
}  
 change_permissions("Elzero")."<br>";
 change_permissions("Work.docx")."<br>";
 change_permissions("Delak.txt")."<br>";

 
 echo "--------------Task 5--------------------<br>";

// method 1
echo basename(__FILE__) . "<br>";

// method 2
echo pathinfo(__FILE__)['basename'] . '<br>';

// method 3
echo pathinfo(__FILE__, PATHINFO_BASENAME) . '<br>';

// method 4
//print_r(end(explode("\\",__FILE__)));


echo "-------------task 6------------------<br>";
//method 1

$handle = fopen("elzero.txt", "r");

  echo fread($handle ,24)."<br>";

  rewind($handle);
//method 2
echo file_get_contents("elzero.txt")."<br>";

//method 3 
echo fgets($handle, 20) . " " . fgets($handle, 7) . "<br>";

rewind($handle);


echo"-----------------task 7--------------<br>";

file_put_contents("elzero.txt", "Hello Elzero Web\nSchool");
echo file_get_contents("elzero.txt")."<br>";

