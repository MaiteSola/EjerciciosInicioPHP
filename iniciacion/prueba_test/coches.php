<?php
// Crear clases en php, los métodos están dentro de clase coche

// si necesito incluir una clase que no está aqui lo hago poniendo: include 'coche.php'; esto inserta el contenido del archivo
// para evitar incluirlo más de una vez se hace así: require_once 'coche.php' o en absoluta '/var/www/html/coche.php';
class Coche
{

    private $marca;
    private $modelo;
    private $color;

    // Constructor
    public function __construct($marca, $modelo, $color)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }


    // Método para mostrar el coche en un div
    public function mostrar() {

    }


    //Método para cambiar el color del coche
    public function pintar($nuevoColor) {}
}

?>


<html>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Coche</title>
    <link rel="stylesheet" href="estilos.css">
</head>

</html>