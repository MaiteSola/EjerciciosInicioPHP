<?php   
$fecha = date("d/m/Y" );    //El dolar sirve para crear las variables como para utilizarlas.
$hora = date("h:i:s" ); //Hay funciones del PHP que tiene librerias. Puedes crear tus propias librerias.
$nombre = "Maite"; //Strings

$num= 3; //Números
printf ("$.1f",$num); //Este no me hace pero es para darle formato
$numFl= 3.25; //float
echo "<p>La suma de $num y $numFl es ". ($num+$numFl). "</p>"; //La concatenación de strings es con el . y esto es una suma
//Dobles comillas evalua las variables que pones ahí.
echo '<p>La suma de $num y $numFl es '. ($num+$numFl). '</p>';  //La comilla simple interpreta de forma literal no interpreta lo que metas en $num por eso se le pone . para concatenar
echo '<p>La suma de '.$num.' y '.$numFl. 'es '. ($num+$numFl). '</p>';

//Para debugear utilizamos booleanos. Es mejor puntos de interrupción pero con esto lo puedes hacer.
 $show_error = true;    
 var_dump($show_error);

$array= array("Uno","Dos"); // Para realizar un array
echo "Bienvenida Maite";

// Defining constant
define("SITE_URL", "https://www.cuatrovientos.org/");  
// Using constant  
echo 'Thank you for visiting - ' . SITE_URL; 


//Falta definir las variables
if ($a > $b) 
    {    
        echo "a es mayor que b";  
    } elseif ($a == $b) 
    {    echo "a es igual que b";  
    } else 
    {    echo "a es menor que b";  
    }  
 //(expr) ? ValorSiTrue : ValorSiFalse;  
 $boolean = TRUE; 
 $result = ($boolean) ? ' Es True' : ' Es False'; 
 echo $result;



//Lo que hace este script es: Solo crear las variables
?>
<html>
 <head>       
    <title>Fecha y hora</title>
 </head>    
    <body>    
         <p><?php echo"Hola Mundo. Hoy es " .$fecha.". " ; ?> </p>  <!-- Aquí pinta mediante el echo       -->
        <p><?php echo"Hora: " .$hora; ?> </p>

    </body>        

</html>