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
$nombre=htmlentities($_POST["nombre"]);
$correo=htmlentities($_POST["correo"]);
$ec=htmlentities($_POST["ec"]);
$textarea=htmlentities($_POST["textarea"]);
$archivo=htmlentities($_POST["archivo"]);
$eboot=htmlentities($_POST["eboot"]);
$acept=htmlentities($_POST["acept"]);
?>
<div class="container">
<h1>Contactanos</h1>
<table class="table table-striped table-hover">
    <tr>
        <th colspan="2">Contactanos</th>
    </tr>
     <tr>

        <td>Nombre:</td>
        <td><?= ucwords($nombre)?></td>
    </tr>
    <tr>

        <td>Situación:</td>
        <td><?= ucwords($ec)?></td>
    </tr>
    <tr>

        <td>Texto:</td>
        <td><?= ucwords($textarea)?></td>
    </tr>
    <tr>
        <td>Archivo:</td>
        <td><?= ucwords($archivo)?></td>
    </tr>
    <tr>
        <td>Boot?:</td>
        <td><?= ucwords($eboot)?></td>
    </tr>
   
    <tr>
        <td>He leído los terminos y condiciones:</td>
        <td><?= ucwords($acept)?></td>
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


