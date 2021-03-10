<?php

include("conexion.php");
        $id = $_GET['idpaquete'];
        $consulta = "DELETE FROM tpaquetes WHERE idpaquete = '$id'";
        $respuesta = mysqli_query($conex,$consulta);
        if ($respuesta){
            echo "<script>alert('REGISTRO ELIMINADO!');window.location='/ApiResPhp/Paquetes.php'</script>";
        }else{
            echo "<script>alert('ALGO SALIO MAL!');window.history.go(-1);</script>";
        }
        
?>