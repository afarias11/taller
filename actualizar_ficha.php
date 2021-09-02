<?php
include('funciones.php');
session_start();
$vficha_numero=$_SESSION['ficha_numero'];
$vficha_progra=$_POST['ficha_progra'];
$miconexion=conectar_bd('Andres1234','bd_sena');
$resultado=consulta($miconexion,"UPDATE fichas SET ficha_numero='{$vficha_numero}',ficha_progra='{$vficha_progra}' WHERE ficha_numero='{$vficha_numero}'");

if ($miconexion->affected_rows>0)
{
    echo "Actualizacion exitosa";
}
?>