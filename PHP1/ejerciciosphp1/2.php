<?php

$palabra = "Hola Mundo ";
$arbalap = "";
for ($i=strlen($palabra); $i >=0;  $i--) { 
    $arbalap .= substr($palabra, $i, 1);
}
echo $palabra;
echo $arbalap;
?>