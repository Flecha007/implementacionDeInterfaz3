<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>INICIO</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilosInicio.css">
    <script src="js/jquery-3.5.1.js"></script>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>
<body>
  
<header class="main-header">
        <div class="container container--flex">
            <div class="logo-container column column--50">
            </div>
            <div class="main-header__contactInfo column column--50">
                <p class="main-header__contactInfo__phone">
                    <spam class="icon-phine">55-555-555</spam>
                </p>
                <p class="main-header__contactInfo__address">
                    <spam class="icon-location">La Paz - Bolivia</spam>
                </p>
            </div>
        </div>
    </header>
    <nav class="main-nav">
        <div class="container container--flex">
            <spam class="icon-menu" id="btnmenu"><img src="img/menu.png" alt=""></spam>
            <ul class="menu" id="menu">
                <li class="menu__item"><a href="/" class="menu__link menu__link--select">INICIO</a></li>
                <li class="menu__item"><a href="administrar.php" class="menu__link">ADMINISTRAR</a></li>
                <li class="menu__item"><a href="ventas.php" class="menu__link">VENTAS</a></li>
                <li class="menu__item"><a href="estadisticas.php" class="menu__link">ESTADISTICAS</a></li>
            </ul>
            <div class="social-icon">
                <a href="" class="social-icon__link">
                    <spam class="icon-facebook"><img src="img/fb.ico" alt=""></spam>
                </a>
                <a href="" class="social-icon__link">
                    <spam class="icon-WhatsApp"> <img src="img/whatsapp.ico" alt=""></spam>
                </a>
                <a href="" class="social-icon__link">
                    <spam class="icon-mail"><img src="img/gmail.ico" alt=""></spam>
                </a>
            </div>
        </div>
    </nav>
    
    <section class="banner">
        <img src="img/img7.jpeg" alt="" class="banner__img">
        <div class="banner__content">HOTEL EL MAS ALLA</div>
    </section>
    
    <main class="mian">
        <section class="group group--color">
            <div class="container">
                <h2 id="Resultados" class="main__title">Bienvenido al mas alla</h2>
                <p class="main__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iste praesentium magnam inventore, sunt quibusdam rerum perferendis illum explicabo similique excepturi earum, ipsam, ut sint at odio nostrum aspernatur. Atque.</p>
            </div>
        </section>

<br>
        <section class="group today-special">
            <div class="container container--flex">
                <?php
        $datos=json_decode(file_get_contents("http://192.168.0.8/API/post.php"),true);
        for ($i=0; $i<count($datos); $i++){
        ?>
            <!-- TARJETA DE PRODUCTO -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> <h4>cliente:</h4>
                          <?php echo($datos[$i]["nombre_cliente"])?>
                        </div> 
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <h6>doc. cliente:</h6>
                            <?php echo($datos[$i]["doc_cliente"]);?> 
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <h6>Nom. paquete:</h6>
                            <?php echo($datos[$i]["nombre_paquete"]);?> 
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <h6>días:</h6>
                            <?php echo($datos[$i]["cantidad_dias"]);?> 
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <h6>Vendedor:</h6>
                            <?php echo($datos[$i]["nombre_usuario"]);?> 
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <h6>Fecha:</h6>
                            <?php echo($datos[$i]["fecha"]);?> 
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <h6>Total:</h6>
                            <?php echo($datos[$i]["total"]);?> 
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php
    }
?>
            </div>
        </section>
        


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>



    </main>
    <footer class="main-footer">
            <div class="container container--flex">
                <div class="column column--33">
                    <h2 id="Contactos" class="column__title">Por que visitarnos</h2>
                    <p class="column__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa soluta recusandae aliquam ut, ipsam neque libero illo dolorem sed pariatur, saepe sint? Iure expedita animi vel repellat officia, praesentium! Expedita.</p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">COntactanos</h2>
                    <p class="column__txt">LA PAZ -BOLIVIA</p>
                    <p class="column__txt">Telefono: 55-555-555</p>
                    <p class="column__txt">encustasdlrts@gmail.com</p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">Siguenos en nuestras redes sociales</h2>
                    <p class="column__txt"><a href="" class="icon-facebook">Facebook</a></p>
                    <p class="column__txt"><a href="" class="icon-WhatsApp">WhatsApp</a></p>
                    <p class="column__txt"><a href="" class="icon-Gmail">Gmail</a></p>
                </div>
                <p class="copy">© 2020 Encuestas DLRT's | Todos los derechos reservados</p>
            </div>
        </footer>
        
    <script src="js/menu.js"></script>  
        
</body>
</html>