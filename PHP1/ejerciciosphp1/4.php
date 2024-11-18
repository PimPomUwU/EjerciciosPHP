<?php

function EsAmstrong (string $num, int $i) {
    $potencia =  intval(strlen($num));
    if ($i < $potencia) {
        return intval(substr($num, $i, 1))**$potencia+(EsAmstrong ($num, $i+1));
    } else {
        return 0;
    }
}

$num = 1634;
$aux = EsAmstrong($num, 0);

if ($aux == intval($num)) {
    echo "$num es un número de Armstrong.";
} else {
    echo "$num no es un número de Armstrong.";
}
?>