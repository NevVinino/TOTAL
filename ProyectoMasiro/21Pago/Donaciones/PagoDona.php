<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Masiro &reg; PagoDonación</title>
        <!-- Agregar iconos en linea -->
        <script src="https://kit.fontawesome.com/a618376619.js" crossorigin="anonymous"></script>
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
            <h1>Dona</h1>
        </header>
        <div class="clearfix"></div>
       
        <form action="php/mostrarcontacto2.php" method="POST" class="registra">
            <fieldset class="registrafieldset">
                <legend>Proceso de Pago</legend>
                
                <input type="email" name="correo" id="" placeholder="Ingrese su correo" required> <br><br>
                <label for="">Ingrese cuanto quiere donar <br> Recuerde que la moneda es en $ (dolares):</label>
                <input type="number" name="cantdona" id="" min="1" max="100" required> <br><br>
                <label for="">Tarjeta:</label> <br>
                <input type="radio" name="ec" id="" value="VISA">VISA<br>
                <input type="radio" name="ec" id="" value="MASTERCARD">MASTERCARD <br>
                <input type="radio" name="ec" id="" value="PAYPAL">PAYPAL<br>
                <br>
                <input type="text" name="titular" id="" placeholder="Nombre del Titular" required>
                <br><br>
                <label for="">Información de la tarjeta</label> <br><br>
                <input type="text" name="it1" id="" placeholder="1234 1234 1234 1234" required> <br><br>
                <input type="text" name="it2" id="" placeholder="MM / AA" required> <br><br>
                <input type="text" name="it3" id="" placeholder="CVC" required> <br><br>
                <label for="">Seleccione su País</label>
                <select name="pais" id="">
                    <option value="Perú">Perú</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Brasil">Brasil</option>
                     <option value="Bolivia">Bolivia</option>
                    <option value="Chile">Chile</option>
                    <option value="Ecuador">Ecuador</option>
                </select>
                <br><br>
                <label for="">AUTOR:</label>
                <input type="text" name="autor" id="" placeholder="Ingrese el nombre del autor" required>
                <br><br>
                <label for=""> Información de contacto </label> 
                <br><br>
                <input type="text" name="nombrecom" id="" placeholder="Ingrese su nombre completo" required>
                <table>
                    <tr>
                        <td>
                            <label for="">Seleccione el "codigo de salida internacional " de su país</label>
                            <select name="cdi" id="">
                                <option value="Perú: (+51)" >Perú: (+51)</option>
                                <option value="Argentina (+54)" >Argentina (+54)</option>
                                <option value="Brasil (+55)" >Brasil (+55)</option>
                                <option value="Chile (+56)" >Chile (+56)</option>
                                <option value="Colombia (+57)" >Colombia (+57)</option>
                                <option value="Bolivia (+591)" >Bolivia (+591)</option>
                                <option value="Ecuador (+593)" >Ecuador (+593)</option>
                            </select>
                            <input type="number" name="celular" id="" placeholder="Ingrese su celular" required> <br><br>
                        </td>
                       
                    </tr>
                </table>
                <br>
                <p>En caso de sorteos:</p>
                <br>
                <input type="text" name="direc" id="" placeholder="Dirección,apartado postal,etc" required> <br><br>
                <input type="text" name="ciudad" id="" placeholder="Ciudad" required> <br><br>
                <input type="text" name="distrito" id="" placeholder="Distrito" required> <br><br>
                <input type="number" name="codigop" id="" placeholder="Código postal" required> <br><br>
                <br><br>
                <input type="checkbox" name="acept" id="" required> Guardar mis datos para un proceso de compra <br> <br><br>
                <img src="../../imagenes/img/hachikujigif.gif" alt=""> 
              
                <br><br>
                <input type="submit" value="Enviar"> 
                
               
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