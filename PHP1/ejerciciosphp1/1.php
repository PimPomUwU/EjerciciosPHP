<?php

function area (float $a, float $b, float $c): string {
if ($c==0):
    $area = $a*$b;
    return  $a==$b? "El area del cuadrado es: $area":"El area del rectangulo es: $area";
else:
    $s = ($a+$b+$c)/2;
    $area= sqrt($s*($s-$a)*($s-$b)*($s-$c));
    return "El area del triangulo es: $area";
endif;
}

echo area(2, 2, 0);

?>