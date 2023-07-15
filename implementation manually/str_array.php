<?php
function str_to_arr(string $str)
{
    $arr=[];
    for ($i=0 ; $i<strlen($str) ; $i++)
    {
        $arr[$i]=$str[$i];
    }
    return $arr;
}
echo"<pre>";
print_r(str_to_arr("Heba"))."<br>";
print_r(str_to_arr("khaled"))."<br>";
print_r(str_to_arr("school"))."<br>";
echo"</pre>";
