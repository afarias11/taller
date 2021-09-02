<!DOCTYPE html>
<html>
<head>
<title>Crear programa</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="estilo.css" rel="stylesheet"/>
    
</head>
<body>
<div id="div1" class="container">
<br>
<div id="div2">
<?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?>
<img src="logoSena.png> <?php } ?>
<div id="div3">
<?php
if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
{
    ?>
    <form id="formulario" role="form" method="post"
    action="guardado_programa.php">
    <div class="col-md-12">
    <strong class="lgris">Ingrese los datos del programa</strong>
    <br>
    <label class="lgris">Programa_id:</label>
    <div class="form-row">
    <div class="form-group col-xs-2">
    <select class="form-control" name="Programa_id">
    <div class="form-group col-md-6">
    <input class="form-control input-lg" type="number"name="Programa_id" value="" placeholder="PROGRAMA_ID" required/>
    <label class="lgris">Progra_Nombre:</label>
    <input class="form-control" style="text-transform: uppercase;" type="text" name="Progra_Nombre" value="" placeholder="progra_nombre" required/>
    </div>
    </div>
    <label class="lgris">Progra_tipo:</label>
    <input class="form-control" style="text-transform:
    uppercase;" type="text" name="Progra_tipo" value="" placeholder="progra_tipo" required/>
        <br>
        <input class="btn btn-primary" type="submit" value="Guardar" >
    </div>
    </form>
    <?php
}
else
{
    echo "no tiene permisos para realizar esta accion";
}
?>
<br>
<button><a href="Menu.php">Regresar</a></button>
</div>
</div>
</div>
</body>
</html>