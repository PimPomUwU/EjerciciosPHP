<?php
class Libro {

    public $titulo, $autor, $anioPublicacion, $disponible;

    public function constructor($titulo, $autor, $anioPublicacion, $disponible) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
        $this->disponible = $disponible;
    }

    public function prestarLibro() {
        if ($this->disponible == true) {
            $this->disponible = false;
            echo "El libro {$this->titulo} ha sido prestado <br> <br>";
        } else {
            echo "El libro {$this->titulo} no esta disponible <br>";
        }
    }

    public function devolverLibro () {
        if ($this->disponible == false) {
            $this->disponible = true;
            echo "El libro {$this->titulo} ha sido devuelto <br> <br>";
        } else {
            echo "Imposible devolver {$this->titulo} <br>";
        }
    }

    public function mostrarInformacion() {
        echo "Libro: {$this->titulo} <br>
        Autor: {$this->autor} <br>
        Publicacion: {$this->anioPublicacion} <br>
        Disponibilidad: ".var_export($this->disponible, true)."<br> <br>";
    }

}
?>