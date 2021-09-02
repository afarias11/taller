<?php
include('funciones.php');
$vficha_numero=$_POST['ficha_numero'];
$vficha_progra=$_POST['ficha_progra'];

$miconexion=conectar_bd('Andres1234','bd_sena');
$resultado=consulta($miconexion,"INSERT INTO fichas (ficha_numero,ficha_progra) VALUES ('{$vficha_numero}','{$vficha_progra}') ");

if ($resultado)
{
    echo "Guardado exitoso";
}
?>