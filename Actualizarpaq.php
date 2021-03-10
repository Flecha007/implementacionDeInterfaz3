<?php

include("Rest/conexion.php");
$id =$_GET["idpaquete"];
$consulta = "SELECT * FROM tpaquetes WHERE idpaquete = '$id'";
$consultaS = "SELECT * FROM tpaquetes";

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilosInicio.css">
    <script src="js/jquery-3.5.1.js"></script>
    <title>ACTUALIZAR</title>
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


<br>

    <form id="mostrar" class="cont-tabla cont-tabla_act" action="Rest/ModPaq.php" method="post">
    <div class="tabla-header_mod">#</div>
    <div class="tabla-header_mod">ID</div>
        <div class="tabla-header_mod">NOMBRE DE PAQUETE</div>
        <div class="tabla-header_mod">DESCRIPCION</div>
        <div class="tabla-header_mod">PRECIO</div>
        <div class="tabla-header_mod">$</div>
        <div class="tabla-header_mod">OPERACION</div>
        <input type="text" class="tabla-input" value="puedes modificar los datos:" readonly>
        <?php $respuesta = mysqli_query($conex,$consulta);
        while($row = mysqli_fetch_assoc($respuesta)){?>
        <input type="text" class="tabla-input" value="<?php echo $row["idpaquete"];?>" name="id" required>
        <input type="text" class="tabla-input" value="<?php echo $row["nombrepaq"];?>" name="nombre" required>
        <input type="text" class="tabla-input" value="<?php echo $row["descripcion"];?>" name="desc" required>
        <input type="number" class="tabla-input" value="<?php echo $row["precio"];?>" name="pre" required>
        <input type="text" class="tabla-input" value="Bs." readonly>
        <?php } mysqli_free_result($respuesta); ?>
        <input type="submit" value="ACTUALIZAR" class="cont_submit">

    </form>
<br>

<div class="cont-tabla cont-tabla_mod">
        <div class="tabla-header_mod">ID</div>
        <div class="tabla-header_mod">NOMBRE DE PAQUETE</div>
        <div class="tabla-header_mod">DESCRIPCION</div>
        <div class="tabla-header_mod">PRECIO</div>
        <div class="tabla-header_mod">MODIFICAR</div>
        <div class="tabla-header_mod">ELIMINAR</div>
        <?php $respuesta = mysqli_query($conex,$consultaS);
        while($row = mysqli_fetch_assoc($respuesta)){?>
        <div class="tabla-item"><?php echo $row["idpaquete"]; ?></div>
        <div class="tabla-item"><?php echo $row["nombrepaq"];?></div>
        <div class="tabla-item"><?php echo $row["descripcion"]; ?></div>
        <div class="tabla-item"><?php echo $row["precio"]; ?></div>
        <div class="tabla-item">
            <button class="btnope"><a href="Actualizarpaq.php?idpaquete=<?php echo $row["idpaquete"];?>" class="table-link">ACTUALIZAR</a></button>
        </div>
        <div class="tabla-item">
        <button class="btnope"><a href="Rest/Elimnarpaq.php?idpaquete=<?php echo $row["idpaquete"];?>" class="table-link_eliminar">ELIMINAR</a></button>
        </div>
        <?php } mysqli_free_result($respuesta); ?>
    </div>
<script src="js/confirmareliminar.js"></script>
</body>
</html>