<?php

include("conexion.php");
        $id = $_GET['idusuario'];
        $consulta = "DELETE FROM tusuarios WHERE idusuario = '$id'";
        $respuesta = mysqli_query($conex,$consulta);
        if ($respuesta){
            echo "<script>alert('REGISTRO ELIMINADO!');window.location='/ApiResPhp/Usuarios.php'</script>";
        }else{
            echo "<script>alert('ALGO SALIO MAL!');window.history.go(-1);</script>";
        }
        
?>