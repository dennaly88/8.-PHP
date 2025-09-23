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
|  CAPITULO       : 23 de 183                                                                                |   
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
echo "CONDICIONAL MULTIPLE IF_ELSE EN PHP ";
echo "<br>";
echo "_____________________________________________________";
echo "<br>";
echo "<br>";
/*----------------------------------------------------------------------------------------------------------*/

echo "<br>";

echo "EJERCICIO DE LOS MESES";
echo "<br>";
echo "_________________________";
echo "<br>";
echo "<br>";


$identificador_mes=8;

if($identificador_mes==1){
    echo "EL MES ES ENERO : " .$identificador_mes;
}else 
if($identificador_mes==2){
    echo "EL MES ES FEBRERO : " .$identificador_mes;
}else
 if($identificador_mes==3){
    echo "EL MES ES MARZO : " .$identificador_mes;
}else
 if($identificador_mes==4){
    echo "EL MES ES ABRIL : " .$identificador_mes;
}else
 if($identificador_mes==5){
    echo "EL MES ES MAYO : " .$identificador_mes;
}else
 if($identificador_mes==6){
    echo "EL MES ES JUNIO : " .$identificador_mes;
}else
 if($identificador_mes==7){
    echo "EL MES ES JULIO : " .$identificador_mes;
}else
 if($identificador_mes==8){
    echo "EL MES ES AGOSTO : " .$identificador_mes;
}else
 if($identificador_mes==9){
    echo "EL MES ES SEPTIEMBRE : " .$identificador_mes;
}else
 if($identificador_mes==10){
    echo "EL MES ES OCTUBRE : " .$identificador_mes;
}else
 if($identificador_mes==11){
    echo "EL MES ES NOVIEMBRE : " .$identificador_mes;
}else
 if($identificador_mes==12){
    echo "EL MES ES DICIEMBRE : " .$identificador_mes;
}else {

echo "ERROR EN COLOCAR EL NUMERO ES VALIDO DEL 1 AL 12";

}

/*----------------------------------------------------------------------------------------------------------*/
echo "<br>";
echo "<br>";

echo "____________________________________________________________________________________________________________";

echo "<br>";
echo "<br>";
echo "<br>";

echo "EJERCICIO DESCUENTO DEPENDIENDO DE LA CANTIDAD";
echo "<br>";
echo "________________________________________________________";
echo "<br>";
echo "<br>";


$computadoras=10;

$precio_computadora=700;

$total_por_computadoras=$computadoras*$precio_computadora;


if($computadoras<5){
   $descuento= $total_por_computadoras*0.10;
   $total_pagar=$total_por_computadoras-$descuento;

}else 
if($computadoras>=5 and $computadoras<10){
    $descuento= $total_por_computadoras*0.20;
    $total_pagar=$total_por_computadoras-$descuento;


}
else
if($computadoras>=10 ){
    $descuento= $total_por_computadoras*0.40;
    $total_pagar=$total_por_computadoras-$descuento;




}

echo "TOTAL A PAGAR : " .$total_pagar;

echo "<br>";
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
|  CAPITULO       : 23 de 183                                                                                |   
|  LINK DEL CURSO : https://www.youtube.com/playlist?list=PLH_tVOsiVGzmnl7ImSmhIw5qb9Sy5KJRE                 |                                                                           |
-------------------------------------------------------------------------------------------------------------|
------------------------------------------------------------------------------------------------------------->
