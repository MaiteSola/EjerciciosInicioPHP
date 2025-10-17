<?php

$nuevoNombre= "David";
$nombres= array("Maite","Miguel","Aitor","Juan","Pablo");

array_push($nombres, "Ander");
 
function pintarNombres($nombresPintar){
    echo "<ul>\n";
    foreach ($nombresPintar as $nombre){
        echo "<li>$nombre</li>\n";

    }
    echo "</ul>\n";
}
?>

<html>

<h1>Lista de nombres en PHP</h1>
<ul>
    <?php 
    $nombres[]=$nuevoNombre;
    foreach ($nombres as $nombre): ?>
            <li><?= $nombre ?></li>
        <?php endforeach; 
        
        //function array_push($nombres, $nuevoNombre); es para añadir + de 1 valor a la vez.
        //Luego pones print_r($nombres);
    ?>
</ul>

<?= pintarNombres(($nombres)) ?>

</html>