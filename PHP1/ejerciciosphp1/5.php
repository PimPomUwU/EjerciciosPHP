<?php

function Milisegundos ($dia, $hora, $minuto, $segudo) {

    return $dia*8.64e+7+ $hora*3.6e+6+ $minuto*6000+ $segudo*1000;

}

$conversion = Milisegundos(0, 0, 0, 1);
echo $conversion;
?>