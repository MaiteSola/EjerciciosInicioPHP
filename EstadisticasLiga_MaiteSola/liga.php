<?php
//Variables y constantes
define("TEMPORADA", "2025-2026");
$index = 0;
$maximosGoleadores = []; //Array para guardar los nombres de los goleadores
$arrayGoles = [];

//Equipo -->Nombre -->listaJugadores -->Nombre --> Estadisticas -->A Y D
$equipos = [

    "Osasuna" => [
        "Aimar Olaizola" => [100, 90],
        "Pepito Grillo" => [80, 50],
        "Rubio Beltrán" => [75, 60]
    ],

    "Madrid" => [

        "Jorge Pado" => [25, 25],
        "Arantxa Sanchez" => [100, 85]
    ],

    "Pozuelo" => [

        "Aitor Sanchez" => [30, 25],
        "Juan Palomo" => [100, 85]
    ]
];

//No funciona pero esta es la idea.
// function resizeArray(){

//     foreach ($equipos as $equipo => $arrayJugadores) {

//         foreach($arrayJugadores as $estadisticas => $listaEstadisticas){
//              $numGoles = (rand(0, 10));

//             $equipos[]= $numGoles;


//     }
// }
// };

//Funciones
function anyadirGoles($listaEstadisticas)
{
    $numGoles = (rand(0, 10));

    echo "<td>" . $numGoles . "</td>";
    //Debería ampliar el array aquí pero no consigo.    
};

?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Estadisticas Liga</title>

</head>


<body>
    <h1>Liga de Fútbol Profesional: <?php echo TEMPORADA; ?></h1>

    <?php foreach ($equipos as $equipo => $arrayJugadores) { ?>

        <?php echo "<h2> $equipo</h2>"; ?>

        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <!-- Para cuando quiera ampliar (Añade php inicial) -->
                <!--  foreach (array_keys(reset($equipos)) as $listaElementos): ?> -->
                <!-- <th>Nombre</th>
                    <th>Ataque</th>
                    <th>Defensa</th> -->
                <!-- endforeach; ?> -->

                <th>Nombre</th>
                <th>Ataque</th>
                <th>Defensa</th>

            </tr>


            <?php foreach ($arrayJugadores as $nombreJug => $listaJugadores) { ?>
                <!-- Accedo a la lista jugadores -->
                <tr>
                    <?php echo "<td> $nombreJug </td>" ?>
                    <?php foreach ($listaJugadores as $estadisticas => $listaEstadisticas) { ?>
                        <?php echo "<td> $listaEstadisticas </td>" ?>

                    <?php }; ?>
                    <!-- Final de estadísticas -->

                </tr>
            <?php }; ?>
            <!-- Final del foreach de nombres de jugadores -->

        </table>

    <?php }; ?>
    <!-- Acaba el foreach del h1 con los nombres de los equipos -->



    <h1>Liga con goles</h1>

    <?php foreach ($equipos as $equipo => $arrayJugadores) { ?>

        <?php echo "<h2> $equipo</h2>"; ?>

        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <!-- Para cuando quiera ampliar (Añade php inicial) -->
                <!--  foreach (array_keys(reset($equipos)) as $listaElementos): ?> -->
                <!-- <th>Nombre</th>
                    <th>Ataque</th>
                    <th>Defensa</th> -->
                <!-- endforeach; ?> -->

                <th>Nombre</th>
                <th>Ataque</th>
                <th>Defensa</th>
                <th>Goles</th>

            </tr>

            <?php foreach ($arrayJugadores as $nombreJug => $listaJugadores) { ?>
                <!-- Accedo a la lista jugadores -->
                <tr>
                    <?php echo "<td> $nombreJug </td>" ?>
                    <?php foreach ($listaJugadores as $estadisticas => $listaEstadisticas) { ?>
                        <?php echo "<td> $listaEstadisticas </td>" ?>

                    <?php }; ?>
                    <!-- Final de estadísticas -->
                    <!-- Añado estadísticas de gol -->
                    <?php anyadirGoles($listaEstadisticas); ?>
                </tr>
            <?php }; ?>
            <!-- Final del foreach de nombres de jugadores -->

        </table>

    <?php }; ?>
    <!-- Acaba el foreach del h1 con los nombres de los equipos -->

    <!-- Máximos goleadores no puedo hacer porque no amplio el array-->

</body>

</html>