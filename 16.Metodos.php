<hr>
    DANNY JOSE JIMENEZ GUTIERREZ                                                                                        <br>
    TELEFONO :0424-281-44-55                                                                                            <br>
    CORREO : DENNALY88@GMAIL.COM                                                                                        <br>
    INGENIERO EN SISTEMAS                                                                                               <br>
                                                                                                                        <br>
<hr>

            <title>Danny Jimenez | PHP</title>
            <link rel="shortcut icon" href="imagenes/php.png"/>
            <h3>Metodos en PHP</h3>
            <hr>
            <br>   

<?php

class Coche {
    // Propiedades o atributos
    public $marca;
    public $modelo;
    public $color;
    public $velocidad;

    // Método constructor: se ejecuta al crear un nuevo objeto
    public function __construct($marca, $modelo, $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = 0; // La velocidad inicial siempre es 0
    }

    // Método para acelerar el coche
    public function acelerar($aumento) {
        $this->velocidad += $aumento;
        echo "El " . $this->marca . " " . $this->modelo . " ha acelerado. Nueva velocidad: " . $this->velocidad . " km/h.\n";
        echo "<br>";

    }

    // Método para frenar el coche
    public function frenar($disminucion) {
        $this->velocidad -= $disminucion;
        if ($this->velocidad < 0) {
            $this->velocidad = 0;
        }
        echo "El " . $this->marca . " " . $this->modelo . " ha frenado. Nueva velocidad: " . $this->velocidad . " km/h.\n";
        echo "<br>";

    }

    // Método para obtener la velocidad actual
    public function obtenerVelocidad() {
        return $this->velocidad;
    }

    // Método para cambiar el color del coche
    public function pintar($nuevoColor) {
        $this->color = $nuevoColor;
        echo "El color del coche ha sido cambiado a: " . $this->color . ".\n";
        echo "<br>";

    }
}

// Ahora creamos un objeto (una instancia de la clase Coche)
$miCoche = new Coche("Nissan", "Sentra", "Azul");

// Accedemos a sus propiedades y llamamos a sus métodos
echo "Mi coche es un " . $miCoche->marca . " " . $miCoche->modelo . " de color " . $miCoche->color . ".\n";
$miCoche->acelerar(50); // Acelera a 50 km/h
$miCoche->frenar(20); // Frena a 30 km/h
echo "La velocidad actual es: " . $miCoche->obtenerVelocidad() . " km/h.\n";
$miCoche->pintar("Rojo");
echo "El nuevo color es " . $miCoche->color . ".\n";

echo "<br>";

?>

<hr>	
    CUA , ESTADO MIRANDA 2025                                                                                           <br>
    CURSO DE PHP                                                                                                        <br>
    DEV DEVELOPMENT                                                                                                     <br>    
<hr>
