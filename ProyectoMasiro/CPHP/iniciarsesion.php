<?php
    
    $nom=$_POST['nombre'];
    $ape=$_POST['apellido'];
    $edad=$_POST['edad'];
    $sexo=$_POST['sexo'];
    $correo=$_POST['correo'];
    $tel=$_POST['telefono'];
    $sis=$_POST['ssalud'];
    $alergia=$_POST['alergico'];
    $gruposan=$_POST['gruposan'];
    $observaciones=$_POST['campotexto'];

    $fecha = date("d/m/y H:i a")
?>
<html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Masiro &reg; Mi lista</title>
        <!-- Agregar iconos en linea -->
        <script src="https://kit.fontawesome.com/a618376619.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/Pindex.css">
    </head>
    <script>
        window.addEventListener('mouseover', initLandbot, { once: true });
        window.addEventListener('touchstart', initLandbot, { once: true });
        var myLandbot;
        function initLandbot() {
          if (!myLandbot) {
            var s = document.createElement('script');s.type = 'text/javascript';s.async = true;
            s.addEventListener('load', function() {
              var myLandbot = new Landbot.Livechat({
                configUrl: 'https://chats.landbot.io/v3/H-1256912-0V04TF9NEG4S1JXR/index.json',
              });
            });
            s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
          }
        }
    </script>
    <body background="../imagenes/img/negrofondo.jpg" text="white">
        
        <nav>
            <a href="../1Inicio/inicio.html">Inicio</a> &nbsp; 
            <a href="../3MiLista/milista.html">Mi Lista</a> &nbsp; 
            <a href="../5Autores/autores.html">Autores</a> &nbsp; 
            <a href="../6Tienda/sus.html">Tienda</a> &nbsp; 
            <a href="../14Directorios/direc.html">Directorios</a> &nbsp; 
            <a href="../8InciarS/iniciarsesion.html">Iniciar Sesión</a>  &nbsp; 
            <a href="../7Registro/registra.html">Registrar</a>
            <img src="../imagenes/img/gato.png" alt="" align="right" usemap="#perfil" width="60"> 
            <map name="perfil">
                <area shape="circle" coords="1253,132,1321" href="../12ApartadoPerfil/perfil.html" alt="">
            </map> 
            <table align="right">
                <tr>
                    <td width="295" >
                        <form action="" align="left">
                            <fieldset >
                                <input type="text" name="" id="" placeholder="..." required>
                                <input type="submit" value="Buscar">
                                <img src="../imagenes/img/lupa.png" alt="" align="right" width="20">
                            </fieldset>
                        </form>
                    </td>
                </tr>
                
            </table>
        </nav>
        <div class="clearfix">

        </div>
        <header>
            <h1>Iniciar Sesión</h1>
        </header>
         <br><br> 
        <form method="post" action="validar.php" class="iniciar">
            <fieldset class="iniciarfieldset">
                <center>
                    <img src="../imagenes/img/gojoLogin.jpg" alt="" width="150"><br><br>
                </center>
             
                <legend>Iniciar Sesión</legend>
                <input type="email" name="email" id="re" placeholder="EMAIL*">
                <br> <br>
                <input type="password" name="pass" id="" placeholder="Contraseña*" required>
                <br> <br>
                <input type="submit" value="ACCEDER">
                
            </fieldset>
        </form>
      
        <div class="clearfix"></div>

        <footer>
            MngMasiro&copy; 
            <p>Página realizada por el Grupo 8</p> <br>
            <div class="foo1">
                <a href="../16Nosotros/noso.html">Nosotros</a> &nbsp;  
                <a href="../15Servicios/servi.html">Servicios</a> &nbsp;  
                <a href="../18Contactamos/ayu.html">Contactanos</a> &nbsp;  
                <a href="../13Equipo/Equi.html">Equipo</a> &nbsp;  
                <a href="../17Politicas/poli.html">Politicas de privacidad</a> &nbsp;  
            </div>
            <div class="foo2">
               
                <table align="right">
                    <td>    
                        <img src="../imagenes/img/Facebook.png" alt="" align="center" usemap="#F" width="40"> 
                        <map name="F">
                       <area shape="circle" coords="1253,132,1321" href="https://www.facebook.com"  target="_blank" alt="">
                        </map>
                    </td>
                    <td>    
                        <img src="../imagenes/img/Twitter.png" alt=""align="center" usemap="#T" width="35">
                         <map name="T">
                         <area shape="circle" coords="1253,132,1321" href="https://twitter.com/home"  target="_blank" alt="">
                        </map>
                    </td>
                    <td>
                        <img src="../imagenes/img/Instagram.png" alt="" align="center" usemap="#I" width="35">
                        <map name="I">
                            <area shape="circle" coords="1253,132,1321" href="https://www.instagram.com"  target="_blank" alt="">
                        </map>
                    </td>
                    <td>
                        <img src="../imagenes/img/WhatsApp.png" alt="" align="center" usemap="#W" width="30"> 
                        <td>: +51 987654321</td>
                        </table>
                
                    </td>
                </table>
               
        </div>
        </footer>
    </body>
</html>