<?php
include('funciones.php');
session_start();
$vPrograma_id=$_SESSION['Programa_id'];
$vProgra_Nombre=$_POST['Progra_Nombre'];
$vProgra_Tipo=$_POST['Progra_Tipo'];
$miconexion=conectar_bd('Andres1234','bd_sena');
$resultado=consulta($miconexion,"update programa set Progra_Nombre='{$vProgra_Nombre}',Progra_Tipo='{$vProgra_Tipo}' where Programa_id='{$vPrograma_id}'");

if ($miconexion->affected_rows>0)
{
    echo "Actualizacion exitosa";
}
?>