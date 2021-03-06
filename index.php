<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>INICIO</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilosInicio.css">
    <script src="js/jquery-3.5.1.js"></script>
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
    
    
        
        <section class="group today-special">

            <section class="banner">
        <img src="img/img7.jpeg" alt="" class="banner__img">
        <div class="banner__content">
        HOTEL EL MAS ALLA
        <div class="log">
            <br>
                <form method="post" class="formReg">
                   <h3 class="TituloForm">INICIAR SESION</h3>
                    <div class="contenedorInputs">
                        <input type="text" name="usuario" placeholder="Usuario" class="inputlog" required>
                        <input type="password" name="password" placeholder="Contraseña" class="inputlog" required>
                        <input type="submit" name="ingresa" value="INGRESAR" class="btnlog">

                    </div>
                </form>

                <?php 
                   include("Rest/login.php");
               ?>
            </div>

        </div>
    </section>
        </section>
        
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
                <p class="copy">© 202 Encuestas DLRT's | Todos los derechos reservados</p>
            </div>
        </footer>
        
    <script src="js/menu.js"></script>  
        
</body>
</html>