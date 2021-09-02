<?php
include('funciones.php');
$vPrograma_id=$_POST['Programa_id'];
$vProgra_Nombre=$_POST['Progra_Nombre'];
$vProgra_tipo=$_POST['Progra_tipo'];
$miconexion=conectar_bd('Andres1234','bd_sena');
$resultado=consulta($miconexion,"insert into programa (Programa_id,Progra_Nombre,Progra_tipo) values ('{$vPrograma_id}','{$vProgra_Nombre}','{$vProgra_tipo}') ");

if ($resultado)
{
    echo "Guardado exitoso";
}
?>
<button><a href="crear_programa.php">Regresar</a></button>