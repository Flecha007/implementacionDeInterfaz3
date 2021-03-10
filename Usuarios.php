<?php

include("Rest/conexion.php");

$consulta = "SELECT * FROM tusuarios";

?>

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
        <input type="text"  id="nom" name="nombre" placeholder="Nombre" class="input100" required>
        <input type="text"  id="us" name="usuario" placeholder="Usuario" class="input50" required>
        <input type="password"  id="pssw" name="password" placeholder="Contraseña" class="input50" required>
        <input type="number"  id="ci" name="ci" placeholder="Nro Documento" class="input100" required>
        <input type="submit"  name="registro" value="Registrar" class="btnEnviar">
    
    </div>
</form>

<?php 
    include("Rest/regUs.php");
?>
</div>

    <div class="cont-tabla cont-tabla_mod">
        <div class="tabla-header_mod">CI</div>
        <div class="tabla-header_mod">NOMBRE</div>
        <div class="tabla-header_mod">NomUSUARIO</div>
        <div class="tabla-header_mod">CONTRASEÑA</div>
        <div class="tabla-header_mod">MODIFICAR</div>
        <div class="tabla-header_mod">ELIMINAR</div>
        <?php $respuesta = mysqli_query($conex,$consulta);
        while($row = mysqli_fetch_assoc($respuesta)){?>
        <div class="tabla-item"><?php echo $row["numdocumento"]; ?></div>
        <div class="tabla-item"><?php echo $row["nombre"];?></div>
        <div class="tabla-item"><?php echo $row["nomusuario"]; ?></div>
        <div class="tabla-item"><?php echo $row["password"]; ?></div>
        <div class="tabla-item">
            <button class="btnope"><a href="Actualizar.php?idusuario=<?php echo $row["idusuario"];?>" class="table-link">ACTUALIZAR</a></button>
        </div>
        <div class="tabla-item">
        <button class="btnope"><a href="Rest/Eliminar.php?idusuario=<?php echo $row["idusuario"];?>" class="table-link_eliminar">ELIMINAR</a></button>
        </div>
        <?php } mysqli_free_result($respuesta); ?>
    </div>
<script src="js/confirmareliminar.js"></script>

</body>
</html>