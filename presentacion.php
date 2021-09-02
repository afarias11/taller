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
$aprendices="SELECT * FROM aprendices";


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class ="container-table">
        <div class="table__title">Datos de los aprendices</div>
        <div class="table__header">Apre_id</div>
        <div class="table__header">Apre_Tipoid</div>
        <div class="table__header">Apre_Numid</div>
        <div class="table__header">Apre_Nombres</div>
        <div class="table__header">Apre_Apellidos</div>
        <div class="table__header">Apre_Direccion</div>
        <div class="table__header">Apre_Telefono</div>
        <div class="table__header">Apre_Ficha</div>
    <?php $resultado = mysqli_query('Funciones.php', $aprendices);
    while($row=mysqli_fetch_assoc($resultado)) { ?>
         
        <div class="table__item"><?php echo $row["Apre_id"]; ?></div>
        <div class="table__item"><?php echo $row["Apre_Tipoid"]; ?></div>
        <div class="table__item"><?php echo $row["Apre_Numid"]; ?></div>
        <div class="table__item"><?php echo $row["Apre_Nombres"]; ?></div>
        <div class="table__item"><?php echo $row["Apre_Apellidos"]; ?></div>
        <div class="table__item"><?php echo $row["Apre_Direccion"]; ?></div>
        <div class="table__item"><?php echo $row["Apre_Telefono"]; ?></div>
        <div class="table__item"><?php echo $row["Apre_Ficha"]; ?></div>
        <?php } mysqli_free_result ($resultado);?>

</div>
</body>
</html>