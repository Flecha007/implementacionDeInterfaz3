<?php

include("conexion.php");
        $id = trim($_POST['id']);
        $nombre = trim($_POST['nombre']);
        $desc = trim($_POST['desc']);
        $pre = trim($_POST['pre']);
        $consulta = "UPDATE tpaquetes SET nombrepaq = '$nombre', descripcion ='$desc', precio = '$pre' WHERE idpaquete = '$id'";
        $respuesta = mysqli_query($conex,$consulta);
        if ($respuesta){
            echo "<script>alert('REGISTRO CORRECTO!');window.location='/ApiResPhp/Paquetes.php'</script>";
        }else{
            echo "<script>alert('ALGO SALIO MAL!');window.history.go(-1);</script>";
        }
        
?>