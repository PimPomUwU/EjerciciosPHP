<?php
function obtenerValoresParametros($url) {

    $array = explode("?",$url);
    $array_parametros = explode("&",$array[1]);
    print_r($array);
    echo "<br>";
    print_r($array_parametros);
    echo "<br>"."<br>"."Ahora los va a partir en pedazos 🔪:"."<br>";
    $valores = [];
    for ($i=0; $i<count($array_parametros); $i++) {
    $array_valores = explode("=",$array_parametros[$i]);
    $valores[$i] = $array_valores[1]; 
    print_r($array_valores);
    echo "<br>";
    }
    echo "<br>"."Resultado:"."<br>";
    print_r($valores);

}


$url = "https://www.ejemplodeurl.com?usuario=john&edad=30&pais=Colombia&intereses=programación,música,deportes&preferencias=oscuro&suscripción=true&referido=amigo123&campaña=blackfriday&idioma=es&moneda=COP";
echo $url."<br>";
obtenerValoresParametros($url);
?>
