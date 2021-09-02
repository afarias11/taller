<?php
    include('Funciones.php');
    session_start();
    if (!ISSET($_SESSION['usuario'])){
    $_SESSION['usuario']=$_POST['usuario'];
    $_SESSION['clave']=$_POST['clave'];
    }
    $miconexion=conectar_bd('Andres1234','bd_sena');
    $resultado=consulta($miconexion, "select * from usuarios where usua_nomuser='{$_SESSION['usuario']}' and usua_contra='{$_SESSION['clave']}'");
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Menu principal</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="estiloin.css" rel="stylesheet"/>
    
</head>
<body>
<div id="div1" class="container">
<br>
<div id="div2">
<img class="img" src="logoSena.png" width="90px" height="90px">
<?php if($resultado->num_rows>0) { ?> 
<?php } ?>
<div id="div3">
<?php
if($resultado->num_rows>0)
{
    $fila = $resultado->fetch_object();
    $_SESSION['Tipo_usuario']=$fila->usua_tipo;
?>

<input style="width:40%," class="btn btn-primary" type="button" onclick="location.href = 'registro_aprendiz.php'" value="Registro de aprendiz">
<input style="width:40%," class="btn btn-primary" type="button" onclick="location.href = 'consulta_aprendiz.php'" value="Consulta de aprendiz">

<input style="width:40%," class="btn btn-primary" type="button" onclick="location.href = 'modificar_aprendiz.php'" value="Actualizacion de aprendiz">
<input style="width:40%," class="btn btn-primary" type="button" onclick="location.href = 'borrar_aprendiz.php'" value="Borrar aprendiz">
<br><br>
<input style="width:40%," class="btn btn-primary" type="button" onclick="location.href = 'crear_programa.php'" value="Crear programa">
<input style="width:40%," class="btn btn-primary" type="button" onclick="location.href = 'consulta_programa.php'" value="Consultar programa">

<input style="width:40%," class="btn btn-primary" type="button" onclick="location.href = 'modificar_programa.php'" value="Modificar programa">
<input style="width:40%," class="btn btn-primary" type="button" onclick="location.href = 'eliminar_programa.php'" value="Eliminar programa">
<br><br>
<input style="width:40%," class="btn btn-primary" type="button" onclick="location.href = 'crear_ficha.php'" value="Crear ficha">
<input style="width:40%," class="btn btn-primary" type="button" onclick="location.href = 'consulta_ficha.php'" value="Consultar ficha">

<input style="width:40%," class="btn btn-primary" type="button" onclick="location.href = 'modificar_ficha.php'" value="Modificar ficha">
<input style="width:40%," class="btn btn-primary" type="button" onclick="location.href = 'eliminar_ficha.php'" value="Eliminar ficha">
<br><br>
<?php
}
else
{
    echo "usuario o clave invalido";
}
$miconexion->close();
?>

<br><br>
</div>
</div>
</div>
</body>
</html>



