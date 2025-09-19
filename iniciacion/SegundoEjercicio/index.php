<?php

$nuevoNombre= "David";
$nombres= array("Maite","Miguel","Aitor","Juan","Pablo");

?>

<html>

<h1>Lista de nombres en PHP</h1>
<ul>
    <?php 
    $nombres[]=$nuevoNombre;
    foreach ($nombres as $nombre): ?>
            <li><?= $nombre ?></li>
        <?php endforeach; 
        
        //function array_push(array $nombres, &$nuevoNombre):string{} es para añadir valores
        ?>
</ul>

</html>