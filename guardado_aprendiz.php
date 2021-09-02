<?php
include('funciones.php');
$vtipoid=$_POST['tipoid'];
$vnumid=$_POST['numid'];
$vnombres=$_POST['nombres'];
$vapellidos=$_POST['apellidos'];
$vdireccion=$_POST['direccion'];
$vtelefono1=$_POST['telefono1'];
$vficha=$_POST['ficha'];

$miconexion=conectar_bd('Andres1234','bd_sena');
$resultado=consulta($miconexion,"INSERT INTO aprendices (apre_tipoid,apre_numid,apre_nombres,apre_apellidos,apre_direccion,apre_telefono1,apre_ficha) values ('{$vtipoid}','{$vnumid}','{$vnombres}','{$vapellidos}','{$vdireccion}','{$vtelefono1}','{$vficha}') ");

if ($resultado)
{
    echo "Guardado exitoso";
}
?>
<a href="menu.php">Volver</a>