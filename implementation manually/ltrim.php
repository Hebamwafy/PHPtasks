<?php
function Left_trim(string $str , mixed $val=" "):string 
{
    $result=" ";
    $stop=false;
   for($i=0 ; $i<strlen($str) ; $i++){
    
    if ($str[$i]===$val &&$stop===false)
    {
        continue;
    }
    else
    {
        $stop=true;
    }
      $result.=$str[$i];
    }
    return $result;
}
echo Left_trim("########heba","#");
