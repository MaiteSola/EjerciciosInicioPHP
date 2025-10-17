<?php
session_start();

// Procesar formulario (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'] ?? '';

    if ($accion === 'guardar' && !empty($_POST['nombre'])) {
        // Guardamos el nombre tal cual (como pediste)
        $_SESSION['nombre'] = $_POST['nombre'];
    } elseif ($accion === 'borrar') {
        // Borrar sesión
        session_unset();
        session_destroy();
        // Opcional: volver a iniciar sesión para seguir usando $_SESSION en este script
        // session_start();
    }
}

// Comprobar si hay sesión iniciada
$usuarioConSesion = !empty($_SESSION['nombre']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Gestión de sesiones en PHP</h1>

    <?php if (!$usuarioConSesion): ?>
        <!-- Si NO hay sesión: mostrar formulario para iniciar -->
        <form method="POST" action="">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <input type="hidden" name="accion" value="guardar">
            <button type="submit">Iniciar sesión</button>
        </form>
    <?php else: ?>
        <!-- Si HAY sesión: mostrar saludo y botón cerrar -->
        <h2>Hola, <?php echo $_SESSION['nombre']; ?>. Sesión iniciada.</h2>

        <form method="POST" action="">
            <input type="hidden" name="accion" value="borrar">
            <button type="submit">Cerrar sesión</button>
        </form>
    <?php endif; ?>
</body>
</html>
