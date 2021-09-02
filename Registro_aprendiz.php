<!DOCTYPE html>
<html>
<head>
<title>Registro de aprendices</title>
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
<img src="logoSena.png"> <?php } ?>
<div id="div3" >
<?php
if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
{
    ?>
    <form id="formulario" role="form" method="post"
    action="guardado_aprendiz.php">
    <div class="col-md-12">
    <strong class="lgris">Ingrese los datos del aprendiz</strong>
    <br>
    <label class="lgris">Identificacion:</label>
    <div class="form-row">
    <div class="form-group col-xs-2">
    <select class="form-control" name="tipoid">
    <option value="CC" selected>CC</option>
    <option value="TI">TI</option>
    <option value="RC">RC</option>
    <option value="PEP">PEP</option>
    </select>
    </div>
    <div class="form-group col-md-6">
    <input class="form-control input-lg" type="number"
    name="numid" min="9999" max="9999999999999" value=""
    placeholder="IDENTIFICACION" required/>
    </div>
    </div>
    <label class="lgris">Nombres:</label>
    <input class="form-control" style="text-transform:
    uppercase;" type="text" name="nombres" value="" placeholder="Nombres" required/>
    <label class="lgris">Apellidos:</label>
    <input class="form-control" style="text-transform:
    uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" required/>
    <label class="lgris">Direccion:</label>
    <input class="form-control" style="text-transform:
    uppercase;" type="text" name="direccion" value="" placeholder="DIRECCION" required/>
    <label class="lgris">Telefono:</label>
    <input class="form-control" type="number"
    name="telefono1" min="9999" max="9999999999999" value="" placeholder="TELEFONO1" required/>
    <label class="lgris">Ficha:</label>
    <input class="form-control" type="number"
    name="ficha" min="9999" max="9999999999999" value="" placeholder="FICHA" required/>
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
<a href="menu.php">Volver</a>
<br>
</div>
</div>
</div>
</body>
</html>