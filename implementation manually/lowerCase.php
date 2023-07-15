<?php

function lower_case_str(string $str):string
{
     $low= "All the letters small";
    for ($i=0 ; $i<strlen($str); $i++)
    {
        if (ord($str[$i])>64 && ord($str[$i])<91 )
        {
            $low="The word has Capital letters";
            break;
        }
    }
    return $low;
}
echo lower_case_str("Heba");