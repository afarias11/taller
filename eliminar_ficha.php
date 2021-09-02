<!DOCTYPE html>
<html lang="es">
<head>
<title>Eliminacion de fichas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="estilo.css" rel="stylesheet"/>
    
</head>
<body>
<div id="divconsulta" class="container">
<br>
<div id="div2">
<div id="div4">
<form name="formulario" role="form" method="post"">
<div class="col-md-12">
<strong class="lgris">Ingrese criterio de busqueda</strong>
<br><br>
<div class="form-row">
<div class="form-group col-md-5">
<input class="form-control" type="number" name="ficha_numero" value="" placeholder="NUMERO DE FICHA" />
</div>
<div class="form-group col-md-3">
<input class="btn btn-primary" type="submit" value="Eliminar" >
</div>
</div>
<br>
</div>
</form>
<br>
</div>
<div id="divconsulta2">
<?php
if ($_SERVER['REQUEST_METHOD']==='POST')
{
    include('funciones.php');
    $vficha_numero=$_POST['ficha_numero'];
    $miconexion=conectar_bd('Andres1234','bd_sena');
    $resultado=consulta($miconexion, "select * from fichas where ficha_numero='{$vficha_numero}'");
    $resultado2=consulta($miconexion, "delete from fichas where ficha_numero='{$vficha_numero}'");
    if($resultado->num_rows>0)
    {
        $fila=$resultado->fetch_object();
        echo $fila->ficha_numero." ".$fila->ficha_progra."<br>";
        if($resultado2)
        echo "<br> Datos borrados exitosamente";
    }
    else{
        echo "no existen registros";
}
$miconexion->close();
    }?>
</div>
</div>
</div>
</body>
</html>