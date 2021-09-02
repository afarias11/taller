<?php
include('funciones.php');
session_start();
$vide=$_SESSION['ide1'];
$vnombres=$_POST['nombres'];
$vapellidos=$_POST['apellidos'];
$vdireccion=$_POST['direccion'];
$vtelefono1=$_POST['telefono1'];
$miconexion=conectar_bd('Andres1234','bd_sena');
$resultado=consulta($miconexion,"update aprendices set apre_nombres='{$vnombres}',apre_apellidos='{$vapellidos}',apre_direccion='{$vdireccion}',apre_telefono1='{$vtelefono1}' where Apre_id='{$vide}'");

if ($miconexion->affected_rows>0)
{
    echo "Actualizacion exitosa";
}
?>
<a href="menu.php">Volver</a>