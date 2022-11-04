
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Junior Javier Sánchez</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="page-top">
  <div class="MensajeEnviado" id="MensajeEnviado">
       <div class="cajaMensaje">
            <p>Mensaje Enviado</p>   
       </div>
    </div>
  

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="index.php">
      <img src="img/javier-logo-blanco.png" class="img-fluid rounded b-shadow-a img-logo-dinamico" alt="" width="125">
      </a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll " href="index.php#home">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="index.php#about">Conóceme</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="index.php#service">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="index.php#work">Portafolio</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">Blog</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link js-scroll" href="index.php#contact">Contacto</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Extras
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="aplicaciones.php">Aplicaciones</a>
              <a class="dropdown-item" href="#">Vida Financiera</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  
  <!--/ Intro Skew End /-->

<br><br><br><br>
  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Vida Financiera
            </h3>
            <p class="subtitle-a">
              "Con pareja o sin pareja, la meta es la misma"
              <i></i> 
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="service-box">
            <div class="service-content"> 
              <div class="col-md-12" align="center">
                  <div class="col-md-4" >
                    <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Ingresar un monto" onkeyup="limpiarNumeroConPunto(this)" onchange="limpiarNumeroConPunto(this)" onkeypress="pulsar(event)">
                  <div>
                  
                  <br>
                  <button name="calcular" id="btnResultado" class="button  button-big button-rouded m-2 btn-success" onclick="Calcular();">Calcular</button>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-12">
          <div class="service-box">
            <div class="service-content"> 

              <div id="resultado">
                

              </div>
              <br>
              <h2 class="s-title">¡¡¡ Por un Futuro Mejor !!!</h2>
            
            </div>
          </div>
        </div>



        <!--<div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-stats-bars"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Servicios de Marketing</h2>
              <p class="s-description text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                provident vitae! Magni
                tempora perferendis eum non provident.
              </p>
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->



  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Enviame un Mensaje
                    </h5>
                  </div>
                  <div>
                      <form action="" method="post" role="form" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" required class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" required name="email" id="email" placeholder="Tu Email" data-rule="email" data-msg="Por favor introduzca una dirección de correo electrónico válida" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" required name="tema" id="subject" placeholder="Tema" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres del tema" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" required rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Mensaje"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" name="EnviarMensaje" class="button button-a button-big button-rouded" onclick="Enviado();">Enviar mensaje</button>
                          <!--<input type="submit" value="Enviar" name="EnviarMensaje">--> 
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Estar en contacto
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      
                      Soy desarrollador Web , me encanta programar y todo lo relacionado con Internet y las nuevas tecnologías , crear cosas y enseñar a los demás
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> Chiclayo - La Victoria</li>
                      <li><span class="ion-ios-telephone"></span> 927594391</li>
                      <li><span class="ion-email"></span> Juniorjaviersanchezz@gmail.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="https://web.facebook.com/profile.php?id=100006920680461&_rdc=1&_rdr" target="_blank"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href="https://www.instagram.com/juniorjaviersanchezzz/?hl=es-la" target="_blank"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href="https://pe.linkedin.com/in/junior-javier-s%C3%A1nchez-1556521a3?trk=people-guest_people_search-card" target="_blank"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright 2022 <strong>Junior Javier Sánchez</strong>. </p>
              <div class="credits" style="color: #1b6ed9;">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                Diseñado por BootstrapMade
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>


<?php
    if(isset($_POST['EnviarMensaje'])){
        $nombre = $_POST['name'];
        $correo = $_POST['email'];
        $titulo = 'DE TU PAGINA PRINCIPAL:'.$_POST['tema'];
        $mensaje = "Nombre:".$nombre."\r\nCorreo:".$correo."\r\n".$_POST['message'];
        
        $para      = 'juniorsc750@gmail.com';

        // Cabeceras
        $cabeceras = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // Enviamos el mensaje
        
/*        echo $nombre."-".$correo."-".$titulo."-".$mensaje;*/
        mail($para, $titulo, $mensaje, $cabeceras);
    }
        
    
?>



<script>
  function Calcular() {
    num = document.getElementById("cantidad").value; 
    if(num.trim().length != 0){
      htmlMostrar="<p>👉Ahorrar(30%): <strong>S/"+(num*0.30).toFixed(2)+"</strong></p><hr><p>👉Gastos(60%): <strong>S/"+(num*0.60).toFixed(2)+"</strong></p><p>-Pagar Deudas(60%): "+((num*0.60)*0.60).toFixed(2)+"</p><p>-Lo que Quieras(40%): "+((num*0.60)*0.40).toFixed(2)+"</p><hr><p>👉Inversiones(10%): <strong>S/"+(num*0.10).toFixed(2)+"</strong></p>"
      document.getElementById("resultado").innerHTML = htmlMostrar;

    }else{
      alert("Por favor Ingrese un número");
    }

  }

  //SOLO NÚMEROS ENTEROS
  function limpiarNumero(obj) {
      obj.value = obj.value.replace(/\D/g, '');
  }

  //SOLO NÚMEROS ENTEROS CON UN PUNTO
  function limpiarNumeroConPunto(obj) {
      /* El evento "change" sólo saltará si son diferentes */
      obj.value = obj.value.replace(/[^\d\.]/g, '');
      var puntosArray = obj.value.split(".");
      if (puntosArray.length > 2) {
          //alert("Tiene muchos Puntos");
          obj.value = obj.value.substring(0, obj.value.length - 1)
      }
  }


  function pulsar(e) {
    if (e.keyCode === 13 && !e.shiftKey) {
        e.preventDefault();
        var boton = document.getElementById("btnResultado");
        boton.click();
    }
  }
  
</script>