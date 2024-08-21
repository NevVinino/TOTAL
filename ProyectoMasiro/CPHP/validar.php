
<html>
<head>
    <meta charset="UTF-8">
    <?php 
        $email = $_POST["email"];
        $password = $_POST["pass"];

        $contenido ="
        Email: $email
        Contraseña: $password
        ";
        $archivo=fopen("recibido/$email.txt","w");
        fwrite($archivo,$contenido);

    ?>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Masiro &reg; Registrate</title>
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

    <div class="clearfix"></div>
  

    <body>
        Formulario enviado!!
        
        <img src="../imagenes/img/mieruko.png" width="120" alt="">

    </body>

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
</html>
