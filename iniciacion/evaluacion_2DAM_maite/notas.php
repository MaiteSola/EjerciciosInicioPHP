<?php
$nombre = "Maite";


//array multidimensional
$notas = [
    "Programación" => [ //Primera clave. Nombre de la asignatura.
        //Subclaves que son los nombres de las asignaturas.
        //$notas["Programación"]["1ª Evaluación"][0] --> 7
        "1ª Evaluación" => [7, 8, 6], //Cada asignatura tiene un array simple de números, que son las notas.
        "2ª Evaluación" => [9, 7, 8],
        "3ª Evaluación" => [6, 5, 7]
    ],
    "Bases de Datos" => [
        "1ª Evaluación" => [8, 9, 7],
        "2ª Evaluación" => [6, 7, 5],
        "3ª Evaluación" => [9, 8, 10]
    ],
    "Sistemas" => [
        "1ª Evaluación" => [5, 6, 7],
        "2ª Evaluación" => [8, 7, 6],
        "3ª Evaluación" => [7, 8, 9]
    ]
];

$totalNotas=0;
$totalContador = 0;

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Notas</title>
</head>

<body>
    <h1>Notas finales 2DAM de <?php echo $nombre; ?></h1>

    <table border="1" cellpadding="5" cellspacing="0">
        <!-- Cabecera -->
        <tr>
            <td></td>
            <?php

            foreach (array_keys(reset($notas)) as $evaluacion): ?> 
            <!-- reset($notas) coge el primer elemento del array $notas -->
             <!-- array_keys extrae las claves de ese primer elemento en forma de array -->
                <th colspan="3"><?php echo $evaluacion; ?></th>
            <?php endforeach; ?>
            <th rowspan="2">EF</th>
        </tr>
        <tr>
            <td></td>
            <?php

            foreach (array_keys(reset($notas)) as $evaluacion): ?>
                <th>EJ1</th>
                <th>EJ2</th>
                <th>EJ3</th>
            <?php endforeach; ?>
        </tr>

        <!-- Filas de asignaturas -->
        <?php foreach ($notas as $asignatura => $evaluaciones): ?>
            <!-- <tr>
                <td colspan="100%"><b><?php echo $asignatura; ?></b></td>
            </tr> -->
            <tr>
                <?php
                $sumaAsignatura = 0;
                $contadorAsignatura = 0;
                echo "<td>$asignatura</td>";
                foreach ($evaluaciones as $ejercicios) {

                    foreach ($ejercicios as $nota) {

                        echo "<td>$nota</td>";
                        $sumaAsignatura += $nota;
                        $contadorAsignatura++;
                    }
                }
                $mediaAsignatura = $sumaAsignatura / $contadorAsignatura;
                $totalNotas += $sumaAsignatura;
                $totalContador += $contadorAsignatura;
                ?>
                <td><?php echo number_format($mediaAsignatura, 2); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php
    $notaFinalCurso = $totalNotas / $totalContador;
    ?>
    <h2>Nota final de curso: <?php echo number_format($notaFinalCurso, 2); ?></h2>
    <p>
        <?php echo ($notaFinalCurso >= 5) ? "aprobado" : "suspendido"; ?>
    </p>
</body>

</html>