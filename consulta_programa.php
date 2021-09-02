<!DOCTYPE html>
<html lang="es">
<head>
<title>Consulta de programas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="miscss/estilos.css" rel="stylesheet"/>
</head>
<body>
    <div id="divconsulta" class="container">
    <br>
    <div id="div2">
    <div id="div4">
    <form name="formulario" role="form" method="post">
    <div class="col-md-12">
    <strong class="lgris"> Ingrese criterio de busqueda</strong>
    <br><br>
    <div class="form-row">
    <div class="form.group col-md-3">
    <input class="form-control" type="number" name="Programa_id" value="" placeholder="PROGRAMA_ID" />
    </div>
    <div class="form-group col-md-3">
    <input class="form-control" style="text-transform: uppercase;" type="text" name="Progra_Nombre" value="" placeholder="Progra_Nombre" />
    </div>
    <div class="form-group col-md-3">
    <input class="form-control" style="text-transform: uppercase;" type="text" name="Progra_tipo" value="" placeholder="Progra_tipo" />
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
        $vPrograma_id=$_POST['Programa_id'];
        $vProgra_Nombre=$_POST['Progra_Nombre'];
        $vProgra_tipo=$_POST['Progra_tipo'];
        $miconexion=conectar_bd('Andres1234','bd_sena');
        $resultado=consulta($miconexion, "select * from programa where trim(Programa_id) like '%{$vPrograma_id}%' and (trim(Progra_Nombre) like'%{$vProgra_Nombre}%' and trim(Progra_tipo) like '%{$vProgra_tipo}%')");
        if($resultado->num_rows>0)
        
        {
            
            while ($fila=$resultado->fetch_object())
            {
                echo $fila->Programa_id." ".$fila->Progra_Nombre." ".$fila->Progra_tipo."<br>";
            }
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