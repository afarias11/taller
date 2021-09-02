<!DOCTYPE html>
<html lang="es">
<head>
<title>Modificacion de programa</title>
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
<form name="formulario" role="form" method="post">
<div class="col-md-12">
<strong class="lgris">Ingrese criterio de busqueda</strong>
<br><br>
<div class="form-row">
<div class="form-group col-md-5">
<input class="form-control" type="number" name="Programa_id" value="" placeholder="PROGRAMA_ID" />
</div>
<div class="form-group col-md-3">
<input class="btn btn-primary" type="submit" value="Consultar" >
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
    session_start();
    $vPrograma_id=$_POST['Programa_id'];
    $miconexion=conectar_bd('Andres1234','bd_sena');
    $resultado=consulta($miconexion, "select * from Programa where Programa_id='{$vPrograma_id}'");
    if($resultado->num_rows>0)
    {
        $fila=$resultado->fetch_object();
        $_SESSION['Programa_id']=$fila->Programa_id;
        ?>
        <form id="formulario2" role="form" method="post"
        action="actualizar_programa.php">
        <div class="col-md-12">
        <strong class="lgris">Datos del programa</strong><br>

        <label class="lgris">Programa_id:</label>
        <input class="form-control" type="number" name="Programa_id" disabled="disabled" value="<?php echo $fila->Programa_id ?>"/>

        <label class="lgris">Progra_Nombre:</label>
        <input class="form-control" type="text-transform: uppercase;" type="text" name="Progra_Nombre" required value="<?php echo $fila->Progra_Nombre ?>" />

        <label class="lgris">Progra_Tipo:</label>
        <input class="form-control" type="number" name="Progra_Tipo"  value="<?php echo $fila->Progra_Tipo ?>" required />
        <br>
        
        <input class="btn btn-primary" type="submit" value="Actualizar">
            <br>
        </div>
        </form>
        <?php
    }
    else{
        echo "No existen registros";
    }
    $miconexion->close();
}?>
</div>
</div>
</div>
        </body>
</html>