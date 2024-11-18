<?php

function Figura ($lado, $tipo) {
    $figura = "";
    if ($tipo == 1) {
        for ($i=1; $i<=$lado; $i++) { 
            $figura .= "*";
        }
        for ($i=1; $i<=$lado; $i++) { 
            echo $figura."<br>";
        }
    }
    if ($tipo == 2) {
        for ($i=1; $i<=$lado; $i++) { 
            for ($j=0; $j <($lado-$i) ; $j++) { 
                $figura .= "";
            }
            for ($j=0; $j <$i ; $j++) { 
                $figura .= "*";
            }
            echo $figura."<br>";
            $figura = "";
        }

    }
    //return $figura;
}

$lado = 7;

(Figura ($lado, 2));
?>