<?php
$nombre="Maite";
$edad= "33";

$mensajeEdad="";
define("MAYORIA_EDAD",18); //Con números sueltos voy a hacer constantes para que no se hardcoree.
if ($edad >= MAYORIA_EDAD){
    $mensajeEdad="Eres mayor de edad";
} else {
    $mensajeEdad= "Eres menor de edad";
}

//Otra posibilidad con un ternario
//$mensajeEdad = ($edad >= MAYORIA_EDAD) ? "Soy mayor de edad" : "Soy menor de edad";
$numeros="";
for ($i=0; $i<=10; $i++){
    $numeros= $numeros .$i." ";
}


?>
<html>

<h1>Bienvenido a mi sitio web PHP </h1>
<p>Hola <? echo $nombre ?> tienes <? echo $edad ?></p> 

<?php 
echo $mensajeEdad;
echo $numeros
?>

