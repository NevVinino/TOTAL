<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Masiro &reg; Pago3Sub</title>
        <link rel="stylesheet" href="../../css/Pindex.css">
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
    <body background="../../imagenes/img/negrofondo.jpg" text="FFFFF">
        
        <nav>
            <a href="../../1Inicio/inicio.html">Inicio</a> &nbsp; 
            <a href="../../3MiLista/milista.html">Mi Lista</a> &nbsp; 
            <a href="../../5Autores/autores.html">Autores</a> &nbsp; 
            <a href="../../6Tienda/sus.html">Tienda</a> &nbsp; 
            <a href="../../14Directorios/direc.html">Directorios</a> &nbsp; 
            <a href="../../8InciarS/iniciasesion.php">Iniciar Sesión</a>  &nbsp; 
            <a href="../../7Registro/registra.php">Registrar</a>
            <img src="../../imagenes/img/gato.png" alt="" align="right" usemap="#perfil" width="60"> 
            <map name="perfil">
                <area shape="circle" coords="1253,132,1321" href="../../12ApartadoPerfil/perfil.html" alt="">
            </map> 
            <table align="right">
                <tr>
                    <td width="295" >
                        <form action="" align="left">
                            <fieldset >
                                <input type="text" name="" id="" placeholder="..." required>
                                <input type="submit" value="Buscar">
                                <img src="../../imagenes/img/lupa.png" alt="" align="right" width="20">
                            </fieldset>
                        </form>
                    </td>
                </tr>
                
            </table>


        </nav>
        <div class="clearfix"></div>
        <header>
            <h1>Pago#3 / 3 mes</h1>
        </header>
        <form action="php/mostrarcontacto4.php" method="POST" class="registra">
            <fieldset  class="registrafieldset">
                <legend>Proceso de Pago</legend>
                
                <input type="email" name="correo" id="" placeholder="Ingrese su correo"> <br><br>
                <label for="">Rellene el valor con 6 sino la compra no procederá<br> Recuerde que la moneda es en $ (dolares)<br> Se suscribirá por 3 meses si realiza la compra:</label>
                <input type="number" name="pagosub" id="" min="6" max="6"> <br><br>
                <label for="">Tarjeta:</label> <br>
                <input type="radio" name="ec" id="" value="VISA">VISA<br>
                <input type="radio" name="ec" id="" value="MASTERCARD">MASTERCARD <br>
                <input type="radio" name="ec" id="" value="PAYPAL">PAYPAL<br>
                <br>
                <input type="text" name="titular" id="" placeholder="Nombre del Titular" required>
                <br><br>
                <label for="">Información de la tarjeta</label> <br><br>
                <input type="text" name="inf1" id="" placeholder="1234 1234 1234 1234"> <br><br>
                <input type="text" name="inf2" id="" placeholder="MM / AA"> <br><br>
                <input type="text" name="inf3" id="" placeholder="CVC"> <br><br>
                <label for="">Seleccione su País</label>
                <select name="pais" id="">
                    <option value="Perú" >Perú</option>
                    <option value="Argentina" >Argentina</option>
                    <option value="Colombia" >Colombia</option>
                    <option value="Brasil" >Brasil</option>
                    <option value="Chile" >Chile</option>
                    <option value="Ecuador" >Ecuador</option>
                </select>
                <br><br>
                <input type="checkbox" name="acept" id=""> Guardar mis cosas para un proceso de compra seguro en un clic <br> <br><br>
                <input type="submit" value="Enviar"> 
                <img src="../../imagenes/img/HachikujiMoney.gif" alt="">
            </fieldset>
        </form>
        <div class="clearfix"></div>
        <footer>
            <!-- poner dentro de la class "fila" si es necesario-->
            <div class="">
                MngMasiro&copy; 
                <p>Página realizada por el Grupo 8</p> <br>
                <div class="foo1">
                    <a href="../../16Nosotros/noso.html">Nosotros</a> &nbsp;  
                    <a href="../../15Servicios/servi.html">Servicios</a> &nbsp;  
                    <a href="../../18Contactamos/ayu.php">Contactanos</a> &nbsp;  
                    <a href="../../13Equipo/Equi.html">Equipo</a> &nbsp;  
                    <a href="../../17Politicas/poli.html">Politicas de privacidad</a> &nbsp;  
                </div>
                <div class="foo2">
                   
                    <table align="right">
                        <td>    
                            <img src="../../imagenes/img/Facebook.png" alt="" align="center" usemap="#F" width="40"> 
                            <map name="F">
                           <area shape="circle" coords="1253,132,1321" href="https://www.facebook.com"  target="_blank" alt="">
                            </map>
                        </td>
                        <td>    
                            <img src="../../imagenes/img/Twitter.png" alt=""align="center" usemap="#T" width="35">
                             <map name="T">
                             <area shape="circle" coords="1253,132,1321" href="https://twitter.com/home"  target="_blank" alt="">
                            </map>
                        </td>
                        <td>
                            <img src="../../imagenes/img/Instagram.png" alt="" align="center" usemap="#I" width="35">
                            <map name="I">
                                <area shape="circle" coords="1253,132,1321" href="https://www.instagram.com"  target="_blank" alt="">
                            </map>
                        </td>
                        <td>
                            <img src="../../imagenes/img/WhatsApp.png" alt="" align="center" usemap="#W" width="30"> 
                            <td>: +51 987654321</td>
                            </table>
                    
                        </td>
                    </table>
                </div>    
            </div>
        </footer>
    </body>
</html>