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
$nombre=htmlentities($_POST["nombre"]);
$user=htmlentities($_POST["user"]);
$correo=htmlentities($_POST["correo"]);
$pass=htmlentities($_POST["pass"]) ;
$pass2=htmlentities($_POST["pass2"]) ;
$ec=htmlentities($_POST["ec"]) ;
$acept=htmlentities($_POST["acept"]);
//database
$query="INSERT INTO registrar(Fecha,Hora,Nombre,Usuario,Correo,Contraseña,
Contraseña2,Boot,GuardarDatos) VALUES ('$fecha','$hora','$nombre','$user','$correo',
'$pass','$pass2','$ec','$acept')";
mysqli_query($conex,$query);
?>

<div class="container">
<h1>Datos del cliente</h1>
<table class="table table-striped table-hover">
    <tr>
        <th colspan="2">Registrar</th>
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

        <td>Nombre:</td>
        <td><?= ucwords($nombre)?></td>
    </tr>
     <tr>

        <td>Usuario:</td>
        <td><?= ucwords($user)?></td>
    </tr>
    <tr>

        <td>Correo:</td>
        <td><?= ucwords($correo)?></td>
    </tr>
     <tr>

        <td>Contraseña:</td>
        <td><?= ucwords($pass)?></td>
    </tr>
     <tr>
        <td>Repetir Contraseña:</td>
        <td><?= ucfirst($pass2)?></td>
    </tr>
    <tr>
        <td>BOOT:</td>
        <td><?= ucfirst($ec)?></td>
    </tr>
   
    <tr>
        <td>He leído y aceptado las normas:</td>
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
<a class="btn btn-primary" href="../../8InciarS/iniciasesion.php">Volver</a>
</div>

