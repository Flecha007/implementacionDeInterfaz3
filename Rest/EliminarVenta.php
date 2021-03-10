<?php

include("conexion.php");
        $id = $_GET['idventa'];
        $consulta = "DELETE FROM tventas WHERE idventa = '$id'";
        $respuesta = mysqli_query($conex,$consulta);
        if ($respuesta){
            echo "<script>alert('REGISTRO ELIMINADO!');window.location='/ApiResPhp/Aventas.php'</script>";
        }else{
            echo "<script>alert('ALGO SALIO MAL!');window.history.go(-1);</script>";
        }
        
?>