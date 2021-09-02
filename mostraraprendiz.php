<?php
$conexion=mysqli_connect('localhost','root','Andres1234','bd_sena');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar aprendices</title>
</head>
<body>
    <table>
    <tr>
    <td>Apre_id</td>
    <td>Apre_Tipoid</td>
    <td>Apre_Numid</td>
    <td>Apre_Nombres</td>
    <td>Apre_Apellidos</td>
    <td>Apre_Direccion</td>
    <td>Apre_Telefono1</td>
    <td>Apre_Ficha</td>
    </tr>

    <?php
    $sql="SELECT * FROM Aprendices";
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
    <td><?php echo $mostrar['Apre_id']?></td>
    <td><?php echo $mostrar['Apre_Tipoid']?></td>
    <td><?php echo $mostrar['Apre_Numid']?></td>
    <td><?php echo $mostrar['Apre_Nombres']?></td>
    <td><?php echo $mostrar['Apre_Apellidos']?></td>
    <td><?php echo $mostrar['Apre_Direccion']?></td>
    <td><?php echo $mostrar['Apre_Telefono1']?></td>
    <td><?php echo $mostrar['Apre_Ficha']?></td>
    
    </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>