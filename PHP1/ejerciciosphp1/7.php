<?php
function enmarcarTexto($texto) {
    $figura = "";
    $espacio = "";
$palabras = explode(' ', $texto);
 $max = $palabras[1];
    for ($i=0; $i <count($palabras); $i++) { 
        if (strlen($palabras[$i])>strlen($max)) $max=$palabras[$i];
    }
    for ($i=0; $i <=strlen($max)+2 ; $i++) { 
        $figura .= "*";
    }
    echo $figura."<br>";
    for ($i=0; $i <count($palabras); $i++) {
        for ($j=0; $j <strlen($max)-strlen($palabras[$i])+2 ; $j++) { 
            $espacio .= "_";
        } 
        echo "*".$palabras[$i].$espacio."*"."<br>";
        $espacio = "";
    }
    echo $figura."<br>";
}

$texto = "Hola Mundo!";
enmarcarTexto($texto);
?>
