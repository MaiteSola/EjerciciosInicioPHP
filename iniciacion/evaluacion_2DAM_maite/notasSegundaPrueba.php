<?php

define("ALUMNO", "Maite Sola");


$notas = [

    "Programacion" => [

        "1. evaluacion" => [4, 6, 7, 8], //Notas primera
        "2. evaluacion" => [7, 8, 7, 7],
        "3. evaluacion" => [9, 3, 2, 1]

    ],

    "Sistemas" => [

        "1. evaluacion" => [4, 6, 7, 8], //Notas primera
        "2. evaluacion" => [7, 7, 4, 7],
        "3. evaluacion" => [9, 6, 5, 1]

    ],

    "BBDD" => [

        "1. evaluacion" => [1, 6, 7, 8], //Notas primera
        "2. evaluacion" => [7, 8, 7, 7],
        "3. evaluacion" => [9, 3, 1, 1]

    ],

    "Acceso a datos" => [

        "1. evaluacion" => [1, 6, 7, 8], //Notas primera
        "2. evaluacion" => [8, 8, 1, 7],
        "3. evaluacion" => [5, 2, 2, 1]


    ]

];

$totalNotas = 0; //El total de notas introducidas para poder hacer la media de todo.
$totalContador = 0; //El contador total de las notas introducidas en todas las asignaturas
$media = 0;
$contadorNotasTotales = 0;
$sumaTotalNotas = 0;

function aprobado($num)
{
    if ($num >= 5) {
        echo ALUMNO . " ha aprobado el curso";
    } else {

        echo ALUMNO . " ha suspendido el curso";
    }
}

?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Notas</title>
</head>

<body>

    <h1>Notas finales 2DAM de <?php echo ALUMNO; ?></h1>

    <table border="1" cellpadding="5" cellspacing="0">
        <!--border: El grosor de la tabla. cellpading: El espacio interno, para que no quede pegado   cellspacing: Espacio externo entre las tablas. 0Para que estén pegadas. -->
        <!-- PRIMERA FILA -->
        <tr>
            <td>

            </td>
            <?php
            foreach (array_keys(reset($notas)) as $evaluacion):
                // He abierto el foreach cogiendo el primer elemento dentro de notas. 1evaluacion
            ?>
                <!-- Quiero que pinte la celda dónde lo voy a introducir -->
                <th colspan="4"><?php echo "$evaluacion" ?>
                    <!-- quiero que me pinte lo que yo  he llamado evaluación -->
                </th>
            <?php endforeach; ?>
            <td rowspan="2">Evaluación final</td>
        </tr>

        <!-- SEGUNFA FILA pintar num EJERCICIOS -->
        <tr>
            <td></td>
            <?php foreach (array_keys(reset($notas)) as $evaluaciones): ?>
                <th>EJ1</th>
                <th>EJ2</th>
                <th>EJ3</th>
                <th>EJ4</th>
            <?php endforeach; ?>
        </tr>


        <!-- NOMBRE ASIGNATURA Y SUS NOTAS -->
        <?php foreach ($notas as $asignatura => $evaluaciones): ?>
            <tr>
                <!-- <td colspan="1"><b><?php echo $asignatura; ?></b></td> -->

                <?php
                // Tengo que ir sumando las notas de la asignatura
                $sumaAsignatura = 0;
                $totalNotas = 0;
                //Son el número de notas metida por cada asignatura para hacer un contador total despuees
                echo "<td>$asignatura</td>";

                foreach ($evaluaciones as $ejerciciosAsignatura) {

                    foreach ($ejerciciosAsignatura as $nota_ejercicios) {
                        $totalNotas++;
                        $totalContador++; //El total de las unidades de notas que introduzco para dividiar despues
                        echo "<td>$nota_ejercicios</td>";
                        $sumaAsignatura = $sumaAsignatura + $nota_ejercicios;
                        $contadorNotasTotales++; //La suma de notas totales
                    }
                    
                }
                $sumaTotalNotas = $sumaTotalNotas + $sumaAsignatura;

                ?>

                <td colspan="12"><?php echo number_format($sumaAsignatura / $totalNotas, 2); ?></td>

            </tr>

            <!-- total notas es para hacer la media de cada asignatura /totalNotas -->
            <!-- totalContador para la media total -->

        <?php endforeach; ?>
    </table>

    <h1>La Nota media de <?php echo ALUMNO ?> es de: <?php $media = $sumaTotalNotas / $contadorNotasTotales;
                                                        echo number_format($media, 2) ?></h1>

    <p><?php aprobado($media) ?></p>

</body>

</html>