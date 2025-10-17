<?php

//Const
define("VENDEDOR", "Maite");


//Array multidimensional: Ventas en tiendas. Las ventas de los meses en cada tienda.
$ventas = [

    "Tienda Centro" => [
        "Enero" => [450, 500, 300],
        "Febrero" => [250, 300, 350],

    ],
    "Tienda Norte" => [
        "Enero" => [450, 500, 300],
        "Febrero" => [250, 300, 350],

    ],
    "Tienda Sur" => [
        "Enero" => [450, 500, 300],
        "Febrero" => [250, 300, 350],

    ]
];


$ventaStr = "";
$contadorVenta=0; //Contador de ventas
$mediaMes=0;
$sumaVentas=0;

?>



<html>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Notas del Alumno</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<h1>Informe de ventas de <?php echo VENDEDOR ?></h1>

<table border="1" cellpadding="5" cellspacing="0">

    <tr>
        <th>Tienda</th>
        <th>Mes</th>
        <th>Ventas</th>
        <th>Media Mensual</th>
    </tr>

    <?php
    foreach ($ventas as $tiendas => $meses) { ?>
        <?php foreach ($meses as $mes => $ventasMes) {
            $ventaStr = ""; ?>

            <tr>
                <td>
                    <?php echo $tiendas; ?>
                </td>
                <td><?php echo $mes; 
                $contadorVenta=0;
                $sumaVentas=0;?></td>
                <?php foreach ($ventasMes as $venta => $ventaDia) { ?>

                    <?php 
                        $contadorVenta++;
                        $sumaVentas= $sumaVentas + $ventaDia;
                        $ventaStr = $ventaStr . " " . $ventaDia . " "; ?>

                <?php } ?>
                <td>
                    <?php echo $ventaStr ?>
                </td>

                <td>
                    <?php 
                    $media= $sumaVentas/$contadorVenta;
                    echo number_format($media, 2) ?>
                </td>

            </tr>

        <?php } ?>

    <?php } ?>

</table>


<?php ?>

</html>