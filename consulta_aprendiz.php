
<!DOCTYPE html>
<html lang="es">
<head>
<title>Consulta de aprendices</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="estiloin.css" rel="stylesheet"/>
</head>
<body>
    <div id="divconsulta" class="container">
    <br>
    <div id="div2">
    <div id="div4">
    <form  name="formulario" role="form" method="post">
    <div class="col-md-12">
    <strong class="lgris"> Ingrese criterio de busqueda</strong>
    <br><br>
    <div class="form-row">
    <div class="form.group col-md-3">
    <input class="form-control" type="number" name="numid" value="" placeholder="IDENTIFICACION" />
    </div>
    <div class="form-group col-md-3">
    <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" placeholder="Nombres" />
    </div>
    <div class="form-group col-md-3">
    <input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" />
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
    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        include('funciones.php');
        $vnumid=$_POST['numid'];
        $vnombres=$_POST['nombres'];
        $vapellidos=$_POST['apellidos'];
        $miconexion=conectar_bd('Andres1234','bd_sena');
        $resultado=consulta($miconexion, "select * from aprendices where trim(Apre_Numid) like '%{$vnumid}%' and (trim(Apre_Nombres) like'%{$vnombres}%' and trim(Apre_Apellidos) like '%{$vapellidos}%')");
        
        if($resultado->num_rows>0)
        {
            
            while ($fila=$resultado->fetch_object())
            {
                
                echo $fila->Apre_id." ".$fila->Apre_Tipoid." ".$fila->Apre_Numid." ".$fila->Apre_Nombres." ".$fila->Apre_Apellidos." ".$fila->Apre_Direccion." ".$fila->Apre_Telefono1." ".$fila->Apre_Ficha."<br>";
            }
        }
        else{
            echo "no existen registros";
        }
        
        $miconexion->close();
    }?>
    <a href="menu.php">Volver</a>
    </div>
    </div>
    </div>
</body>
</html>