<?php
include_once("lib/template.php");
if($_POST){
$nombre = $_POST['nombre'].' '.$_POST['apellido'];
$asunto = $_POST['asunto'];
$email = $_POST['email'];
//$telefono = $_POST['telefono'];
$text = $_POST['mensaje'];

//Librerías para el envío de mail
include_once('lib/PHPMailer/class.phpmailer.php');
include_once('lib/PHPMailer/class.smtp.php');
 
//Recibir todos los parámetros del formulario
$para = 'jpsevillarreal5@hotmail.com';
$para1 = 'bergman.pereira.novelo@gmail.com';
$asunto = $_POST['asunto'];
$mensaje = '<h2>Nombre: '.$nombre.'</h2><h3>Correo Electrónico: '.$email.'</h3><h3>Mensaje: '.$text.'</h3>';
//$archivo = $imagen;
 
//Este bloque es importante
$mail = new PHPMailer();
//$mail->IsSMTP();
//$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
//$mail->Host = "smtp.gmail.com";
$mail->Host = "localhost";
//$mail->Port = 465;
 
//Nuestra cuenta
//$mail->Username ='bergman.pereira.novelo@gmail.com';
//$mail->Password = 'vladberg01'; //Su password
 
//Agregar destinatario
$mail->AddAddress($para);
$mail->AddBCC($para1);
$mail->Subject = $asunto;
$mail->Body = $mensaje;
//Para adjuntar archivo
//$mail->AddAttachment($archivo, $archivo);
$mail->MsgHTML($mensaje);
  
//Avisar si fue enviado o no y dirigir al index
if($mail->Send())
{
    echo'<script type="text/javascript">
            alert("Enviado Correctamente");            
         </script>';
}
else{
    echo'<script type="text/javascript">
            alert("NO ENVIADO, intentar de nuevo");
         </script>';
}
 }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dr. José Luis villarreal | Cirugía Plástica, Estética & Reconstructiva</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">
    <!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
   <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <!-- owl carousel css -->

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <style type="text/css">

    .img-rounded2 {
  border-radius: 50px;
}
   .img-rounded3 {
  border-radius: 10px;
}
    </style>
</head>

<body>

    <div id="all">

        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs"></p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="index.html">
                                <img src="img/villa_logo_med-1.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="index.php" >Inicio</a>
                                    
                                </li>
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="about.php" >Dr. villarreal</a>
                                    </li>
                                <li class="dropdown ">
                                    <a href="services.php">Servicios</a>
                                    
                                </li>
                                
                                <li class="dropdown active">
                                    <a href="contact.php">Contacto</a>
                                    
                                </li>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header> 

        <!-- *** LOGIN MODAL END *** -->

      <section class="bar background-image-fixed-3 no-mb color-white text-center">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        

                        <h1>Contacto</h1>
                        <div class="icon icon-lg text-center">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>

            <div >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.0959585985906!2d-100.35249828541255!3d25.66811358367935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662bdfe227dddad%3A0x790c6aba88c4d7b7!2sHospital+La+Mision!5e0!3m2!1ses-419!2smx!4v1461348134423" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>

        </section>

        <div id="content">
            <div class="container" id="contact">

                <section>
                    <div class="row">
                        <div class="col-md-8">

                            <div class="heading">
                                <h2>Estamos aquí para ayudarte</h2>
                            </div>

                            <p class="lead">Si tiene alguna duda acerca de algún procedimiento, información acerca de costos o consultas, comuníquese con nosotros.</p>
                            

                            <div class="heading">
                                <h3>Contáctanos</h3>
                            </div>

                            <form method="post" action="">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nombre</label>
                                            <input type="text" class="form-control" id="firstname" name="nombre" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Apellidos</label>
                                            <input type="text" class="form-control" id="lastname" name="apellido" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Asunto</label>
                                            <input type="text" class="form-control" id="subject" name="asunto" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Mensaje</label>
                                            <textarea id="message" class="form-control" name="mensaje" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-envelope-o"></i> Enviar</button>

                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>
                        </div>

                        <div class="col-md-4">


                            <h3 class="text-uppercase">Dirección</h3>

                            <p style="font-size: 21px;">Hospital La Misión 
                                <br>Ave. del Hospital 112
                                <br>Núm de Consultorio 408
                                <br>Col. Sertoma
                                <br>C.P. 64718
                                <br/><strong>Monterrey, Nuevo León</strong>
                            </p>

                            <h3 class="text-uppercase">Teléfono</h3>

                            <p class="text-muted"style="font-size: 21px;">Comunícate con nosotros a los siguiente teléfonos</p>
                            <p style="font-size: 21px;"><li style="font-size: 21px;"><strong>(81) 8143-0987</strong></li>  <li style="font-size: 21px;"><strong>(811) 0800-3796 </strong>
                            </p>



                            <h3 class="text-uppercase">Correo Electrónico</h3>

                            <p class="text-muted" style="font-size: 21px;">Contáctenos por correo electrónico.</p>
                            <ul>
                                <li><strong><a href="#">josevillarreal5@hotmail.com</a></strong>
                                </li>
                            </ul>


                        </div>

                    </div>


                </section>

            </div>
            <!-- /#contact.container -->
        </div>
        <!-- /#content -->

        
<!-- *** GET IT ***
_________________________________________________________ -->

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    
                </div>
                <div class="col-md-4 col-sm-12">
                    
                </div>
            </div>
        </div>


        <!-- *** GET IT END *** -->


         <!-- *** FOOTER ***
_________________________________________________________ -->

 <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>Dr. José L. villarreal</h4>
                    <img src="img/logo2.png" class="img-responsive" width="150px" style="margin-left: 25px">

                    

                </div>
                <!-- /.col-md-3 -->


                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Contacto</h4>

                    <p><strong>Hospital La Misión</strong>
                        <br>Ave. del Hospital 112.
                        <br>Núm. de Consultorio 408
                        <br>Col. Sertoma
                        <br>C.P. 64718 
                        <br>
                        <strong>Monterrey, Nuevo León</strong>
                    </p>

                    <a href="contact.php" class="btn btn-small btn-template-main">Contacto</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <div class="col-md-3 col-sm-6">

                    <h4>Sitios de interes</h4>

                    <p><li><strong><a href="http://www.cmcper.org.mx/site4/index.php/directorio-y-mapa/medicos/item/jose-luis-villarreal-arroyo">Consejo Mexícano de Círugia Plastica</a></strong></li>
                        <br><li><strong><a href="http://cirugiaplastica.org.mx">AMCPER</a></strong></li>
                    </p>


                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <div class="col-md-3 col-sm-6">
                <div class="photostream">
                        <div>
                            <a href="http://www.cmcper.org.mx/site4/index.php/directorio-y-mapa/medicos/item/jose-luis-villarreal-arroyo">
                                <img src="img/logo_CMCPER.png" class="img-responsive" width="150px" alt="CMCPER">
                            </a>
                        </div>
                        <div>
                            <a href="http://cirugiaplastica.org.mx">
                                <img src="img/amcper.png" class="img-responsive" alt="AMCPER">
                            </a>
                        </div>
                        </div>

                </div>
                <!-- /.col-md-3 -->



                
                <!-- /.col-md-3 -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <a href="http://biomarketing.com.mx"><p class="pull-left">&copy; 2016. Biomarketing / Dr. José L. Villarreal</p></a>
                    
                        <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :) -->
                    </p>

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

    

    <!-- gmaps -->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <script src="js/gmaps.js"></script>
    <script src="js/gmaps.init.js"></script>

    <!-- gmaps end -->





</body>

</html>