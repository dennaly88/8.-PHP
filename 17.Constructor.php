<hr>
    DANNY JOSE JIMENEZ GUTIERREZ                                                                                        <br>
    TELEFONO :0424-281-44-55                                                                                            <br>
    CORREO : DENNALY88@GMAIL.COM                                                                                        <br>
    INGENIERO EN SISTEMAS                                                                                               <br>
                                                                                                                        <br>
<hr>

            <title>Danny Jimenez | PHP</title>
            <link rel="shortcut icon" href="imagenes/php.png"/>
            <h3>Constructor en PHP</h3>
            <hr>
            <br>   

<?php

class Libro {
    // Propiedades de la clase
    public $titulo;
    public $autor;
    public $anio;

    // El método constructor
    public function __construct($titulo, $autor, $anio) {
        // Usamos $this-> para referirnos a la propiedad del objeto que se está creando
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anio = $anio;
        echo "¡Se ha creado un nuevo libro!\n\n";
        echo "<br>";
    }

    // Método para mostrar la información del libro
    public function obtenerInfo() {
        return "Título: {$this->titulo}, Autor: {$this->autor}, Año: {$this->anio}";
    }
}

// 1. Creamos el primer objeto 'Libro'
// El constructor se ejecuta aquí, asignando los valores 'El Principito', 'Antoine de Saint-Exupéry' y 1943 a las propiedades.
$libro1 = new Libro("El Principito", "Antoine de Saint-Exupéry", 1943);

// 2. Creamos un segundo objeto 'Libro'
$libro2 = new Libro("1984", "George Orwell", 1949);

echo $libro1->obtenerInfo() . "\n";
echo $libro2->obtenerInfo() . "\n";

?>

<hr>	
    CUA , ESTADO MIRANDA 2025                                                                                           <br>
    CURSO DE PHP                                                                                                        <br>
    DEV DEVELOPMENT                                                                                                     <br>    
<hr>