<?php
$user =  htmlentities($_POST["user"]);
$pass =  htmlentities($_POST["pass"]);

session_start();

if ($user==="apache" && $pass==="1234"){
    setcookie("usuario", $user);
    $_SESSION["code"]="suahfuakgm256%&#!°!3";
    header("Location: ../12ApartadoPerfil/perfil.php");
}
else{  
    session_destroy();
    header("location: iniciasesion.php");    
}
?>
