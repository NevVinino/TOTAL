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
$pagosub=htmlentities($_POST["pagosub"]);
$ec=htmlentities($_POST["ec"]) ;
$titular= htmlentities($_POST["titular"]);
$inf1=htmlentities($_POST["inf1"]);
$inf2=htmlentities($_POST["inf2"]);
$inf3=htmlentities($_POST["inf3"]);
$pais= htmlentities($_POST["pais"]);
$acept=htmlentities($_POST["acept"]);
//database
echo $query="INSERT INTO pago3sub(Fecha,Hora,Correo,Pago3Suscripcion,Tarjeta,Titular,InfTarjeta1,
InfTarjeta2,InfTarjeta3,Pais,GuardarDatos) VALUES ('$fecha','$hora','$correo','$pagosub','$ec','$titular',
'$inf1','$inf2','$inf3','$pais','$acept')";
mysqli_query($conex,$query);
?>
<div class="container">
<h1>Datos del cliente</h1>
<table class="table table-striped table-hover">
    <tr>
        <th colspan="2">Pago Sub 3 mes </th>
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
        <td>Pago 3 Subcripcion:</td>
        <td><?= ucwords($pagosub)?></td>
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
        <td><?= ucfirst($inf1)?></td>
    </tr>
    <tr>
        <td>Inf2:</td>
        <td><?= ucfirst($inf2)?></td>
    </tr>
    <tr>
        <td>Inf3:</td>
        <td><?= ucfirst($inf3)?></td>
    </tr>
    <tr>
        <td>País:</td>
        <td><?= ucfirst($pais)?></td>
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


