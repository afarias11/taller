<?php
function conectar_bd($clave,$basedatos)
{
    $conexion = new mysqli('localhost', 'root', 'Andres1234', 'bd_sena');
    if ($conexion->connect_error)
    {
        die('error de conexion (' .$mysqli->connect_errno . ')'.$mysqli->error);
    }
return $conexion;
}
function consulta ($conexion,$consulta_sql)
{
    $resultado=$conexion->query($consulta_sql);
    if (!$resultado)
    {
        echo 'No se pudo ejecutar la consulta:'.$conexion->error;
        exit;
    }
    return $resultado;
}
?>