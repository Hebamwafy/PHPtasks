<?php
function str_length(string $str)
{
    $num =0;
   while ($str)
   {
    if(empty($str[$num]))
    {
        break;
    }
    $num++;
   }
    return $num;
}
echo str_length("heba and khaled");