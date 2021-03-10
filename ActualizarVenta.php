<?php

include("Rest/conexion.php");
$id =$_GET["idventa"];
$consulta = "SELECT * FROM tventas WHERE idventa = '$id'";
$consultaS = "SELECT * FROM tventas";

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

    <form id="mostrar" class="cont-tabla cont-tabla_act" action="Rest/ModVen.php" method="post">
    <div class="tabla-header_mod">#</div>
    <div class="tabla-header_mod">NomCLIENTE</div>
        <div class="tabla-header_mod">CI CLIENTE</div>
        <div class="tabla-header_mod">IDPAQUETE</div>
        <div class="tabla-header_mod">DIAS</div>
        <div class="tabla-header_mod">TOTAL</div>
        <div class="tabla-header_mod">PROCESO</div>
        <input type="text" class="tabla-input" value="puedes modificar los datos:" readonly>
        <?php $respuesta = mysqli_query($conex,$consulta);
        while($row = mysqli_fetch_assoc($respuesta)){?>
        <input type="hidden" class="tabla-input" value="<?php echo $row["idventa"];?>" name="id" required>
        <input type="text" class="tabla-input" value="<?php echo $row["nomcliente"];?>" name="nomc" required>
        <input type="number" class="tabla-input" value="<?php echo $row["doccliente"];?>" name="docc" required>
        <input type="number" class="tabla-input" value="<?php echo $row["idpaquete"];?>" name="idpaq" required>
        <input type="number" class="tabla-input" value="<?php echo $row["cantidaddias"];?>" name="dias" required>
        <input type="number" class="tabla-input" value="<?php echo $row["total"];?>" name="total" required>
        <?php } mysqli_free_result($respuesta); ?>
        <input type="submit" value="ACTUALIZAR" class="cont_submit">

    </form>
<br>

<div class="cont-tabla cont-tabla_mod">
        <div class="tabla-header_mod">NomCLIENTE</div>
        <div class="tabla-header_mod">CI CLIENTE</div>
        <div class="tabla-header_mod">IDPAQUETE</div>
        <div class="tabla-header_mod">DIAS</div>
        <div class="tabla-header_mod">TOTAL</div>
        <div class="tabla-header_mod">PROCESO</div>
        <?php $respuesta = mysqli_query($conex,$consultaS);
        while($row = mysqli_fetch_assoc($respuesta)){?>
        <div class="tabla-item"><?php echo $row["nomcliente"]; ?></div>
        <div class="tabla-item"><?php echo $row["doccliente"];?></div>
        <div class="tabla-item"><?php echo $row["idpaquete"]; ?></div>
        <div class="tabla-item"><?php echo $row["cantidaddias"]; ?></div>
        <div class="tabla-item"><?php echo $row["total"]; ?></div>
        <div class="tabla-item">
        <button class="btnope"><a href="ActualizarVenta.php?idventa=<?php echo $row["idventa"];?>" class="table-link">ACTUALIZAR</a></button>
        <button class="btnope"><a href="Rest/EliminarVenta.php?idventa=<?php echo $row["idventa"];?>" class="table-link_eliminar">ELIMINAR</a></button>
        </div>
        <?php } mysqli_free_result($respuesta); ?>
    </div>
<script src="js/confirmareliminar.js"></script>
</body>
</html>