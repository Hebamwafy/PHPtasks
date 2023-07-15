<?php
 
function str_reverse($str)
{
    $num=0;

   while ($str)
   {
    if(empty($str[$num]))
    {
        break;
    }
    $num++;
   }

    $r="";
    for ($i=$num-1; $i>=0 ; $i--)
    {
        $r.=$str[$i];
    }
 return $r;
}
echo str_reverse("kaled");