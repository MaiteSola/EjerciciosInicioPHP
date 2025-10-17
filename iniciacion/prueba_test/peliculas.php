<?php

$peliculas = [

    "El zorro" => 1992,
    "Titanic" => 1987,
    "Peter Pan" => 1978,
    "La cenicienta" => 2002,
    "El rey León" => 2003,
    "Pocahontas" => 2004,
    "El tirano" => 2003
];

function pintarTabla($peliculas)
{

    foreach ($peliculas as $titulo => $anyo) {

        echo "<tr><td>" . $titulo . "</td><td>" . $anyo . "</td></tr>";
    };
};


$frases = [];
function peliculasActuales($peliculas)
{

    if ($peliculas != null) {
        $maxAnyo = max($peliculas);
        $index = 0;
        foreach ($peliculas as $titulos => $anyo) {

            if ($anyo == $maxAnyo) {
                $index++;

                $frases[$index - 1] = $index . ". " . $titulos . " en el año " . $anyo;
            }
        }
        if ($index > 1) {
            echo "<h1>Las películas más actuales</h1><br>";
            foreach ($frases as $frase) {
                echo $frase . "<br>";
            };
        } else {
            echo "<h1>La película más actual</h1><br>" . "<p>" . $frases[0] . "</p>";
        }
    }
};

?>

<html>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Notas del Alumno</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<h1>

    LISTADO DE PELÍCULAS
</h1>

<table border="1" cellpadding="5" ;
    cellspacing="0">

    <tr>
        <th>Películas</th>
        <th>Año</th>

    </tr>


    <!-- Si solo añades un elemento se haría asi: array_unshift($peliculas,1985);
     para más hacemos de esta manera -->
    <?php $peliculas = ["Las nieves" => 1985] + $peliculas;
    // Para eliminar el último elemento se hace así:
    array_pop($peliculas);

    ?>
    <!-- Esto lo añadiría al principio -->
    <?php pintarTabla($peliculas); ?>

    <?php peliculasActuales($peliculas); ?>




</table>

</html>