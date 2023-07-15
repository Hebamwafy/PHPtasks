<?php
 function repeat_func(string $str , int $repeats=2 , bool $space=false )
{
    $seprator =$space?" ":"";
    $statment=" ";
    for ( $i=0 ; $i<$repeats ; $i++)
    {
        $statment .=$str.$seprator;
    }
    return $statment.$seprator;
}
echo repeat_func("Heba" ,3,true);
