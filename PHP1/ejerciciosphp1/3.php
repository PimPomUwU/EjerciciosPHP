<?php

function mostrar (String $str1, String $str2){
    $out1 = ""; 
    $out2 = "";
    $bool1 = true;
    for ($i=0; $i <=strlen($str1);  $i++) {
        for ($j=0; $j <=strlen($str2);  $j++) {
            if (substr($str1, $i, 1)==substr($str2, $j, 1)) $bool1 = false;          
        }
        $bool1? $out1 .= substr($str1, $i, 1) : $bool1 = true;
    }
    for ($i=0; $i <=strlen($str2);  $i++) {
        for ($j=0; $j <=strlen($str1);  $j++) {
            if (substr($str2, $i, 1)==substr($str1, $j, 1)) $bool1 = false;           
        }
        $bool1? $out2 .= substr($str2, $i, 1) : $bool1 = true;
    }
    echo $out1."<br>";
    echo $out2."<br>";
}

mostrar("ayuda", "eureca");

?>