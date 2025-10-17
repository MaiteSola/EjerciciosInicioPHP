<?php

define("TEMPORADA", "2025-2026");

//Definimos datos de equipos y jugadores
function getEquipos()
{

    return [

        "Real Madrid" => [

            ["nombre" => "Martín", "ataque" => 95, "defensa" => 40],
            ["nombre" => "Antonio", "ataque" => 85, "defensa" => 35],
            ["nombre" => "Juán", "ataque" => 15, "defensa" => 85]

        ],
        "Barcelona" => [

            ["nombre" => "Rebeca", "ataque" => 75, "defensa" => 50],
            ["nombre" => "Alba Flores", "ataque" => 55, "defensa" => 30],
            ["nombre" => "Martinho", "ataque" => 90, "defensa" => 47],
        ]

    ];
};

$equipos = getEquipos();

//función para pintar la tabla sin goles
function pintarEquipo($nombreEquipo, $jugadores)
{
    //Le paso dos variables

    echo "<h2>$nombreEquipo</h2>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Jugador</th><th>Ataque</th><th>Defensa</th>";
    foreach ($jugadores as $jugador) {
        echo "<tr>";
        echo "<td>{$jugador['nombre']}</td>";
        echo "<td>{$jugador['ataque']}</td>";
        echo "<td>{$jugador['defensa']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}

function pintarGoles($equipos)
{
    //Hago un nuevo array
    $equiposConGoles = [];

    foreach ($equipos as $equipo => $jugadores) {

        foreach ($jugadores as $jugador) {
            $jugador["goles"] = rand(0, 10); //Le añades el campo al jugador
            $equiposConGoles[$equipo][] = $jugador; //sobreescribes el jugador en el array.
        }
    }

    return $equiposConGoles;
}

function pintarTablaGenerica($nombreEquipo, $jugadores, $columnas)
{
    echo "<h2>$nombreEquipo</h2>";
    echo "<table border='1' cellpadding='5'>";

    // Cabecera
    echo "<tr><th>Jugador</th>";
    foreach ($columnas as $col) {
        echo "<th>" . ucfirst($col) . "</th>";
    }
    echo "</tr>";

    // Filas
    foreach ($jugadores as $jugador) {
        echo "<tr>";
        echo "<td>{$jugador['nombre']}</td>";
        foreach ($columnas as $col) {
            echo "<td>{$jugador[$col]}</td>";
        }
        echo "</tr>";
    }

    echo "</table><br>";
};

$goleadores = [];
function goleadores($equiposConGoles)
{

    foreach ($equiposConGoles as $equipo => $jugadores) {
        foreach ($jugadores as $jugador) {

            $goleadores[] = [

                "nombre" => $jugador["nombre"],
                "equipo" => $equipo,
                "goles" => $jugador["goles"]

            ];
        }
    }

    foreach ($goleadores as $maxGoles) {

        $maxGoleadores = max(array_column($goleadores, "goles"));
    }
    return $goleadores;
};

function maxGoleadores($goleadores)
{
 // Buscar el número máximo de goles
    $maxGoles = max(array_column($goleadores, "goles"));

    // Filtrar solo los jugadores que tengan ese número
    $top = array_filter($goleadores, function($j) use ($maxGoles) {
        return $j["goles"] === $maxGoles;
    });
    return $top;
}

?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Estadisticas Liga</title>
</head>

<body>

    <h1><?php echo "Liga de Fútbol Profesional: " . TEMPORADA; ?></h1>

    <?php $equipos = getEquipos();
    // generamos un nuevo array con goles aleatorios
    $equiposConGoles = pintarGoles($equipos);

    foreach ($equipos as $nombre => $jugadores) {
        pintarEquipo($nombre, $jugadores);
    }


    foreach ($equiposConGoles as $nombre => $jugadores) {

        pintarTablaGenerica($nombre, $jugadores, ["ataque", "defensa", "goles"]);
    }

    $goleadores = goleadores($equiposConGoles);
    $maximos = maxGoleadores($goleadores);

    echo "<h2>Máximos goleadores</h2>";
    echo "<ul>";
    foreach ($maximos as $j) {
        echo "<li>{$j['nombre']} ({$j['equipo']}) - {$j['goles']} goles</li>";
    }
    echo "</ul>";


    ?>


</body>


</html>