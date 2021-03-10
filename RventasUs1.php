<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>INICIO</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilosInicio.css">
    <script src="js/jquery-3.5.1.js"></script>


  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>
<body>

    <nav class="main-nav">
        <div class="container container--flex">
            <spam class="icon-menu" id="btnmenu"><img src="img/menu.png" alt=""></spam>
            <ul class="menu" id="menu">
                <li class="menu__item"><a href="inicioUs1.php" class="menu__link menu__link--select">INICIO</a></li>
                <li class="menu__item"><a href="RventasUs1.php" class="menu__link">REGISTRAR VENTAS</a></li>
                <li class="menu__item"><a href="estadisticasUs1.php" class="menu__link">ESTADISTICAS</a></li>
            </ul>
        </div>
    </nav>
    
    <main class="mian">




<section class="group today-special">



<br>
<br>
<form method="post" class="formReg" >
            <h2 class="TituloForm">FORMULARIO DE VENTAS</h2>
            <div class="contenedorInputs">
            <input type="text"  id="nom" name="nombre" placeholder="Nombre de Cliente" class="input50" required>
            <input type="number"  id="ci" name="cicli" placeholder="CI de Cliente" class="input50" required>
            <input type="number"  id="idpaq" name="idpaquete" placeholder="Codigo de paquete" class="input100" required>
            <input type="number"  id="cantdias" name="dias" placeholder="Cantidad de días" class="input50" required>
            <input type="number"  id="total" name="total" placeholder="Total" class="input50" required>
            <input type="number"  id="idusuario" name="idus" placeholder="id usuario" class="input100" required>
            <input type="text"  id="fecha" name="fech" placeholder="fecha" class="input100" required>
            <input type="submit"  name="registro" value="Registrar" class="btnEnviar">
            </div>
            </form>
            <?php 
                include("Rest/registrar.php");
            ?>

<br>

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
                <p class="copy">© 2021 DLRT's Hotles| Todos los derechos reservados</p>
            </div>
        </footer>
        
    <script src="js/menu.js"></script>  
        
</body>
</html>