<?php
function str_fill(string $str, int $width ,string $seperator=" ")
{
    $num=0 ;
    while($str)
    {
        if (empty($str[$num]))
        {
            break;
        }
        $num++;
    }
    $result="";
    if($num<$width)
    {
        $dif=$width-$num;
        for($j=0 ; $j<$dif ; $j++)
        {
            $str.=$seperator;
        }
    }
    return $str;
}
echo str_fill("123",8,"*")."<br>";
echo str_fill("1234",8,"*")."<br>";
echo str_fill("123456",8,"*")."<br>";
echo str_fill("1234567",8,"*")."<br>";
echo str_fill("1234568",8,"*")."<br>";
echo str_fill("12345689",8,"*")."<br>";