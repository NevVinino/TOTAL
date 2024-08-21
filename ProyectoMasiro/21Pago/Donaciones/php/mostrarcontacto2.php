<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasiroManga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<?php
//incluye
include("conex.php");
date_default_timezone_set("America/Lima");
$fecha=date("d-m-Y");
$hora=date("h:i a");
$correo=htmlentities($_POST["correo"]);
$cantdona=htmlentities($_POST["cantdona"]);
$ec=htmlentities($_POST["ec"]) ;
$titular= htmlentities($_POST["titular"]);
$it1=htmlentities($_POST["it1"]);
$it2=htmlentities($_POST["it2"]);
$it3=htmlentities($_POST["it3"]);
$pais= htmlentities($_POST["pais"]);
$autor=htmlentities($_POST["autor"]);
$nombrecom= htmlentities($_POST["nombrecom"]);
$cdi= htmlentities($_POST["cdi"]);
$celular=htmlentities($_POST["celular"]);
$direc=htmlentities($_POST["direc"]);
$ciudad=htmlentities($_POST["ciudad"]);
$distrito=htmlentities($_POST["distrito"]);
$codigop=htmlentities($_POST["codigop"]);
$acept=htmlentities($_POST["acept"]);
//database
echo $query="INSERT INTO pagodona(Fecha,Hora,Correo,CantDonacion,Tarjeta,Titular,InfTarjeta1,InfTarjeta2,InfTarjeta3,
Pais,Autor,NombreCompleto,Celular,CodigoInternacional,Direccion,Ciudad,
Distrito,CodigoPostal,GuardarDatos) VALUES ('$fecha','$hora','$correo','$cantdona','$ec','$titular','$it1','$it2','$it3','$pais',
'$autor','$nombrecom','$celular','$cdi','$direc','$ciudad','$distrito','$codigop','$acept')";
mysqli_query($conex,$query);
?>
<div class="container">
<h1>Datos del cliente</h1>
<table class="table table-striped table-hover">
    <tr>
        <th colspan="2">Pago Donaciones</th>
    </tr>
    <tr>

        <td>Fecha:</td>
        <td><?= ucwords($fecha)?></td>
    </tr>
     <tr>

        <td>Hora:</td>
        <td><?= ucwords($hora)?></td>
    </tr>
    <tr>

        <td>Correo:</td>
        <td><?= ucwords($correo)?></td>
    </tr>
    <tr>
        <td>Cantidad de Donación:</td>
        <td><?= ucwords($cantdona)?></td>
    </tr>
    <tr>
        <td>Tipo de tarjeta</td>
        <td><?=ucwords($ec)?></td>
    </tr>
    <tr>
        <td>Titular:</td>
        <td><?= ucfirst($titular)?></td>
    </tr>
    <tr>
        <td>Inf1:</td>
        <td><?= ucfirst($it1)?></td>
    </tr>
    <tr>
        <td>Inf2:</td>
        <td><?= ucfirst($it2)?></td>
    </tr>
    <tr>
        <td>Inf3:</td>
        <td><?= ucfirst($it2)?></td>
    </tr>
    <tr>
        <td>País:</td>
        <td><?= ucfirst($pais)?></td>
    </tr>
    <tr>
        <td>Autor:</td>
        <td><?= ucfirst($autor)?></td>
    </tr>
    <tr>
        <td>Nombre Completo:</td>
        <td><?= ucfirst($nombrecom)?></td>
    </tr>
    <tr>
        <td>Celular:</td>
        <td><?= ucfirst($celular)?></td>
    </tr>
    <tr>
        <td>Codigo Internacional:</td>
        <td><?= ucfirst($cdi)?></td>
    </tr>
    <tr>
        <td>Dirección:</td>
        <td><?= ucfirst($direc)?></td>
    </tr>
    <tr>
        <td>Ciudad:</td>
        <td><?= ucfirst($ciudad)?></td>
    </tr>
    <tr>
        <td>Distrito:</td>
        <td><?= ucfirst($distrito)?></td>
    </tr>
    <tr>
        <td>Codigo Postal:</td>
        <td><?= ucfirst($codigop)?></td>
    </tr>
    <tr>
        <td>Guardar datos:</td>
        <td><?= ucfirst($acept)?></td>
    </tr>
    
   
</table><br>
<?php
date_default_timezone_set("America/Lima");
echo "Fecha: ";
echo date("d-m-Y");
?>
<br><br>
<?php
echo "Hora actual: ";
echo date("h:i a");
?>
<br>
<a class="btn btn-primary" href="../../../1Inicio/inicio.html">Volver</a>
</div>


