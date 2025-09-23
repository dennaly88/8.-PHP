<!-----------------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------------|
| NOMBRE       :  DANNY JOSE JIMENEZ GUTIERREZ                                                               |
| CEDULA       :  16.029.567                                                                                 |
| TELEFONO     :  0424-281-44-55                                                                             |
| CORREO       :  DENNALY88@GMAIL.COM                                                                        |
|------------------------------------------------------------------------------------------------------------|
|  CURSO          : PHP                                                                                      |                                                                                            |
|  DESARROLLADOR  : WEB                                                                                      |                                                                                 |
|  MIRANDA        : CUA  2024                                                                                |       
|  CAPITULO       : 30 de 183                                                                                |   
|  LINK DEL CURSO : https://www.youtube.com/playlist?list=PLH_tVOsiVGzmnl7ImSmhIw5qb9Sy5KJRE                 |                                                                           |
-------------------------------------------------------------------------------------------------------------|
------------------------------------------------------------------------------------------------------------->


<?php
echo "_______________________________________________________________________________ ";
echo "<br>";
echo "     CURSO COMPLETO DE PHP REALIZADO POR DANNY JIMENEZ  2024                     ";
echo "<br>";
echo "________________________________________________________________________________";
echo "<br>";
echo "<br>";
echo "<br>";
echo "_____________________________________________________";
echo "<br>";
echo "          CICLO FOREACH EN PHP                    ";
echo "<br>";
echo "_____________________________________________________";
echo "<br>";

echo "<br>";


/*----------------------------------------------------------------------------------------------------------*/
$favoritas=[
    "Mango"=> 8,
    "Pera"=> 18,
    "Durazno"=> 10,
    "Guanabana"=> 20,
    "Parchita"=> 30
];
$equipo=["Lenovo","Ubuntu 20.04", "I9","SSD 3TB","RAM 18GB"];

echo "EQUIPO PERSONAL <br>";
echo "_________________<br>";


foreach($equipo as $clave => $valor){

echo $clave."-".$valor."<br>";

}

echo "<br>";
echo "<br>";
echo "FRUTAS FAVORITAS <br>";
echo "_________________<br>";

foreach($favoritas as $clave => $valor){

    echo "La Fruta es ".$clave."-"."y tiene un precio". $valor ."-"."<br>";
    
    }

    echo "<br>";
    echo "<br>";
    echo "MATERIAS DEL TRAYECTO 4-1 2024-2025 <br>";
    echo "_____________________________________<br>";
    
    $materias=[
      ["codigo_materia" => "A0001", "descripcion" => "Proyecto"],
      ["codigo_materia" => "A0002", "descripcion" => "Ingles"],
      ["codigo_materia" => "A0003", "descripcion" => "Sociocritca"],
      ["codigo_materia" => "A0004", "descripcion" => "Seguridad"],
      ["codigo_materia" => "A0005", "descripcion" => "Acreditable"]
    ];



    foreach ($materias as $key) {
        echo $key["codigo_materia"]."".$key["descripcion"]."<br>";
    }


/*----------------------------------------------------------------------------------------------------------*/


echo "<br>";
echo "____________________________________________________________________________________________________________";


?>


<!-----------------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------------|
| NOMBRE       :  DANNY JOSE JIMENEZ GUTIERREZ                                                               |
| CEDULA       :  16.029.567                                                                                 |
| TELEFONO     :  0424-281-44-55                                                                             |
| CORREO       :  DENNALY88@GMAIL.COM                                                                        |
|------------------------------------------------------------------------------------------------------------|
|  CURSO          : PHP                                                                                      |                                                                                            |
|  DESARROLLADOR  : WEB                                                                                      |                                                                                 |
|  MIRANDA        : CUA  2024                                                                                |       
|  CAPITULO       : 30 de 183                                                                                |   
|  LINK DEL CURSO : https://www.youtube.com/playlist?list=PLH_tVOsiVGzmnl7ImSmhIw5qb9Sy5KJRE                 |                                                                           |
-------------------------------------------------------------------------------------------------------------|
------------------------------------------------------------------------------------------------------------->