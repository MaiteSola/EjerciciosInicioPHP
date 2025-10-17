<?php

$resultado = null;
$errores = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["num1"]) && !empty($_POST["num1"]) && isset($_POST["num2"]) && !empty($_POST["num2"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $resultado = $num1 + $num2;
        //echo "<h2>El resultado es ".$num1." + ". $num2." = ".$resultado."</h2>";
    } else {
        $errores = true;
        //echo "<p style='color:red;'>Por favor, ingresa ambos números.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form method="POST" action="calculadora2.php">
        <label for="num1">Num 1</label><br>
        <input type="number" id="num1" name="num1"><br><br>

        <label for="num2">Num 2</label><br>
        <input type="number" id="num2" name="num2"><br><br>

        <button type="submit" name="operacion" value="sumar">Sumar</button>
        <!-- <button type="submit" name="operacion" value="restar">Restar</button>
        <button type="submit" name="operacion" value="multiplicar">Multiplicar</button>
        <button type="submit" name="operacion" value="dividir">Dividir</button> -->

    </form>

    <?php
    //Aquí validamos si se envía el formulario
    // Verificamos si el formulario fue enviado
    if ($errores == false && $resultado != null) {
       echo "<h2>El resultado es " . $num1 . " + " . $num2 . " = " . $resultado . "</h2>";        
    } else {
        echo "<p style='color:red;'>Por favor, ingresa ambos números.</p>";
    }
    ?>
</body>

</html>