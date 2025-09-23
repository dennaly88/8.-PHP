<hr>
    DANNY JOSE JIMENEZ GUTIERREZ                                                                                        <br>
    TELEFONO :0424-281-44-55                                                                                            <br>
    CORREO : DENNALY88@GMAIL.COM                                                                                        <br>
    INGENIERO EN SISTEMAS                                                                                               <br>
                                                                                                                        <br>
<hr>

            <title>Danny Jimenez | PHP</title>
            <link rel="shortcut icon" href="imagenes/php.png"/>
            <h3>Clases y Objetos en PHP</h3>
            <hr>
            <br>    


<?php
/*  Definicion de una clase */
class Coche {
    // Propiedades
    public $color;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas; 
    // Constructor
    public function __construct($color, $modelo, $velocidad, $caballaje, $plazas) {
        $this->color = $color;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }
    // Metodos
    public function getColor() {
        return $this->color;
    }
    public function setColor($color) {
        $this->color = $color;
    }
    public function acelerar() {
        $this->velocidad += 10;
    }
    public function frenar() {
        $this->velocidad -= 10;
    }       
    public function getVelocidad() {
        return $this->velocidad;
    }
}
// Crear un objeto
$miCoche = new Coche("Rojo", "Toyota", 0, 150, 5);
// Usar los metodos del objeto
echo "El color de mi coche es: " . $miCoche->getColor() . "<br>";
$miCoche->acelerar();
$miCoche->acelerar();
echo "La velocidad actual de mi coche es: " . $miCoche->getVelocidad() . " km/h<br>";
$miCoche->frenar();
echo "La velocidad actual de mi coche es: " . $miCoche->getVelocidad() . " km/h<br>";
$miCoche->setColor("Azul");
echo "El nuevo color de mi coche es: " . $miCoche->getColor() . "<br>";
echo "<br>";
echo "Mi coche es un " . $miCoche->modelo . " de color "
        . $miCoche->color . " con una velocidad máxima de " 
        . $miCoche->caballaje . " caballos y tiene " 
        . $miCoche->plazas . " plazas.<br>";    
echo "<br>";

            
?>


<hr>	
    CUA , ESTADO MIRANDA 2025                                                                                           <br>
    CURSO DE PHP                                                                                                        <br>
    DEV DEVELOPMENT                                                                                                     <br>    
<hr>



