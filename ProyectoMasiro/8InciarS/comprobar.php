<?php
$user =  $_POST["user"];
$pass =  $_POST["pass"];

session_start();
//incluye
include("conex.php");
//
$consulta="SELECT*FROM registrar where Usuario='$user' and Contraseña='$pass'";
$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("Location: ../12ApartadoPerfil/perfil.php");
}else{
    ?>
    <?php
    include("iniciasesion.php");
    echo '<script>
    alert("Ingrese correctamente los datos para iniciar la sesion");
 
    </script>';    
//exit;
}
mysqli_free_result($resultado);
mysqli_close($conex);
?>