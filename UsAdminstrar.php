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

    <nav class="main-nav">
        <div class="container container--flex">
            <spam class="icon-menu" id="btnmenu"><img src="img/menu.png" alt=""></spam>
            <ul class="menu" id="menu">
                <li class="menu__item"><a href="inicioUS.php" class="menu__link menu__link--select">INICIO</a></li>
                <li class="menu__item"><a href="UsAdminstrar.php" class="menu__link">ADMINISTRAR</a></li>
                <li class="menu__item"><a href="Rventas.php" class="menu__link">REGISTRAR VENTAS</a></li>
                <li class="menu__item"><a href="estadisticas.php" class="menu__link">ESTADISTICAS</a></li>
            </ul>
        </div>
    </nav>
    

    
        
        <section class="group today-special">
            <h1 id="Encuesta" class="group__title">Opciones a elegir</h1>
            <div class="container container--flex">
                <div class="column column--50-25">
                    <img src="img/usuario.png" alt="" class="today-special__img">
                    <a href="Usuarios.php" class="btn btn--contact">USUARIOS</a>
                </div>
                <div class="column column--50-25">
                    <img src="img/ventas.png" alt="" class="today-special__img">
                    <a href="Aventas.php" class="btn btn--contact">VENTAS</a>
                </div>
                <div class="column column--50-25">
                    <img src="img/paquetes.jpg" alt="" class="today-special__img">
                    <a href="Paquetes.php" class="btn btn--contact">PAQUETES</a>
                </div>
            </div>
        </section>
        
    </main>
    <br>
    <br>
    <br>
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
                <p class="copy">© 2021 DLRT's Hotles| Todos los derechos reservados</p>
            </div>
        </footer>
        
    <script src="js/menu.js"></script>  
        
</body>
</html>