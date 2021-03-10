<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilosInicio.css">
    <script src="js/jquery-3.5.1.js"></script>
    <title>PROCESOS</title>
</head>
<body>

<nav class="main-nav">
        <div class="container container--flex">
            <spam class="icon-menu" id="btnmenu"><img src="img/menu.png" alt=""></spam>
            <ul class="menu" id="menu">
            <li class="menu__item"><a href="UsAdminstrar.php" class="menu__link menu__link--select">ADMINISTRAR</a></li>
                <li class="menu__item"><a href="Usuarios.php" class="menu__link">USUARIOS</a></li>
                <li class="menu__item"><a href="Aventas.php" class="menu__link">VENTAS</a></li>
                <li class="menu__item"><a href="Paquetes.php" class="menu__link">PAQUETES</a></li>
            </ul>
        </div>
    </nav>

    <div class="reg">
<br>
<form method="post" class="formReg" onsubmit="return validar();">
    <h2 class="TituloForm">FORMULARIO DE REGISTRO</h2>
    <div class="contenedorInputs">
        <input type="text"  id="nomp" name="nombrepaq" placeholder="Nombre de paquete" class="input100" required>
        <input type="text"  id="desc" name="desc" placeholder="Descripcion" class="input100" required>
        <input type="number"  id="pre" name="pre" placeholder="Precio" class="input100" required>
        <input type="submit"  name="registro" value="Registrar" class="btnEnviar">
    
    </div>
</form>

<?php 
    include("Rest/Regpaq.php");
?>
</div>

    <div class="cont-tabla cont-tabla_mod">
        <div class="tabla-header_mod">ID</div>
        <div class="tabla-header_mod">NOMBRE DE PAQUETE</div>
        <div class="tabla-header_mod">DEWSCRIPCION</div>
        <div class="tabla-header_mod">PRECIO</div>
        <div class="tabla-header_mod">MODIFICAR</div>
        <div class="tabla-header_mod">ELIMINAR</div>
        <?php
        $datos=json_decode(file_get_contents("http://localhost/API/postPaq.php"),true);
        for ($i=0; $i<count($datos); $i++){
        ?>
        <div class="tabla-item"><?php echo($datos[$i]["idpaquete"]) ?></div>
        <div class="tabla-item"><?php echo($datos[$i]["nombrepaq"])?></div>
        <div class="tabla-item"><?php echo($datos[$i]["descripcion"]) ?></div>
        <div class="tabla-item"><?php echo($datos[$i]["precio"]) ?></div>
        <div class="tabla-item">
            <button class="btnope"><a href="Actualizarpaq.php?idpaquete=<?php echo($datos[$i]["idpaquete"])?>" class="table-link">ACTUALIZAR</a></button>
        </div>
        <div class="tabla-item">
        <button class="btnope"><a href="Rest/Elimnarpaq.php?idpaquete=<?php echo($datos[$i]["idpaquete"])?>" class="table-link_eliminar">ELIMINAR</a></button>
        </div>
        <?php } ?>
    </div>
<script src="js/confirmareliminar.js"></script>

</body>
</html>