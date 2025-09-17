<?php
$nombre="Maite";
$edad= "33";

$mensajeEdad="h";
if ($edad > 18){
    $mensajeEdad="Eres mayor de edad";
} else {
    $mensajeEdad= "Eres menor de edad";
}

$numeros="";
for ($i=0; $i<=10; $i++){
    $numeros= $numeros .$i." ";

}


?>
<html>

<h1>Bienvenido a mi sitio web PHP </h1>
<p>Hola <?php echo $nombre ?> tienes <?php echo $edad ?></p>

<?php 
echo $mensajeEdad;
echo $numeros
?>

