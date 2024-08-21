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

//verificar usuario
$verificar_usuario=mysqli_query($conex,"SELECT * FROM registrar WHERE Usuario='$user' ");
if (mysqli_num_rows($verificar_usuario) > 0) {
    ?> 
    
   <script>
            alert("El usuario ya está registrado");
    </script>;
            
   <?php
   header("Location: registra.php");
  
}else{

}
//verificar correo
$verificar_correo=mysqli_query($conex,"SELECT * FROM registrar WHERE Correo='$correo' ");
if (mysqli_num_rows($verificar_correo) > 0){
    ?> 
    <script>
            alert("El correo ya está registrado");
    </script>;
   <?php
   header("Location: registra.php");
} 

?>

