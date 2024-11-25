<?php
require_once('C:\xampp\htdocs\libros/Libro.php');
$libro1 = new Libro;
$libro1->constructor("Don Quijote", "Miguel de Cervantes", 1605, false);


$libro2 = new Libro;
$libro2->constructor("Luna de Plutón", "Ángel David Revilla", 2015, true);

$libro3 = new Libro;
$libro3->constructor("El Principito", "Antoine de Saint-Exupéry", 1943, false);

echo "Intentar prestar un libro ya prestado <br>";
$libro1->prestarLibro();
echo "Devolver un de los libros y verificar su estado <br>";
$libro2->mostrarInformacion();
$libro2->devolverLibro(); 
$libro2->mostrarInformacion();
echo "Demostrar el uso de todos los métodos <br>";
$libro1->mostrarInformacion();
$libro3->mostrarInformacion(); 
$libro1->prestarLibro(); 
$libro3->devolverLibro();
$libro1->mostrarInformacion(); 
$libro3->mostrarInformacion();

?>