<?php
namespace app\helpers;


class UtilHelpers 
{
    public static function randomName($n) 
    {
    $str  = "";
    $wordsandnumbers = "qwertyuiopasdfghjklzxcvbnm1234567890QWERTYUIOPASDFGHJKLZXCVBNM";
    for ($i=0; $i < $n ; $i++) { 
        $random = rand(0, strlen($wordsandnumbers) - 1);
        $str .= $wordsandnumbers[$random];
    }
    return $str;


    }


}
































?>