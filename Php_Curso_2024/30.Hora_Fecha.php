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
|  CAPITULO       : 40 de 183                                                                                |   
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
echo "      HORA Y FECHA EN PHP                    ";
echo "<br>";
echo "_____________________________________________________";
echo "<br>";
echo "<br>";

/*----------------------------------------------------------------------------------------------------------*/

date_default_timezone_set("America/Caracas");

function danny(){

    $di=date("d");
    

    $di=[
        "Monday"=>"Lunes",
        "Tuesday"=>"Martes",
        "Wednesday"=>"Miércoles",
        "Thursday"=>"Jueves",
        "Friday"=>"Viernes",
        "Saturday"=>"Sábado",
        "Sunday"=>"Domingo"
    ];

 

$final=$di[date("l")];
return  $final;

 }



 function dan(){

   
    $me=date("de");

 

    $me=[
        "01"=>"Enero",
        "02"=>"Febrero",
        "03"=>"Marzo",
        "04"=>"Abril",
        "05"=>"Mayo",
        "06"=>"Junio",
        "07"=>"Julio",
        "08"=>"Agosto",
        "09"=>"Septiembre",
        "10"=>"Octubre",
        "11"=>"Noviembre",
        "12"=>"Diciembre"
    ];

$fina=$me[date("de")];
return  $fina;

 }


$fecha=  date("d-m-y");

echo  "La fecha actual es: $fecha";
echo "<br>";
echo "<br>";


$hora=  date("h:i:s A");
echo  "La hora actual es: $hora";

echo "<br>";
echo "<br>";

echo  "El dia  es: " ;
echo  danny();

echo "<br>";
echo "<br>";

$mes=    date("F");
echo  "El mes actual es: $mes";
echo  dan();

echo "<br>";
echo "<br>";

$año=     date("Y");
echo  "El año actual es: $año ";

echo "<br>";




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
|  CAPITULO       : 40 de 183                                                                                |   
|  LINK DEL CURSO : https://www.youtube.com/playlist?list=PLH_tVOsiVGzmnl7ImSmhIw5qb9Sy5KJRE                 |                                                                           |
-------------------------------------------------------------------------------------------------------------|
------------------------------------------------------------------------------------------------------------->