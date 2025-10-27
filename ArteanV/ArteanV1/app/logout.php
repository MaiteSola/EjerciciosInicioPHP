<?php
/**
 * @title: Proyecto integrador Ev01 - Salir sistema.
 * @description:  Script para salir borrando la sesión
 *
 * @version    0.2
 *
 * @author     Ander Frago & Miguel Goyena <miguel_goyena@cuatrovientos.org>
 */

//HE añadido un require
require_once '../templates/header.php';

if (isset($_SESSION['user']))
{
  SessionHelper::destroySession();
  echo "<div class='main'>Has salido de tu sesión. " ;
  // redirección a la pantalla principal
  header('Location: ./../index.php');
}
else echo "<div class='main'><br>" .
  "No puedes salir de sesión por que no estas registrado";
?>
<br><br></div>
</body>
</html>