<?php

include("conexion.php");
        $id = trim($_POST['id']);
        $nombre = trim($_POST['nombre']);
        $doc = trim($_POST['doc']);
        $nomus = trim($_POST['nomusuario']);
        $password = trim($_POST['password']);
        $consulta = "UPDATE tusuarios SET nombre = '$nombre', numdocumento ='$doc', nomusuario = '$nomus', `password` = '$password' WHERE idusuario = '$id'";
        $respuesta = mysqli_query($conex,$consulta);
        if ($respuesta){
            echo "<script>alert('REGISTRO CORRECTO!');window.location='/ApiResPhp/Usuarios.php'</script>";
        }else{
            echo "<script>alert('ALGO SALIO MAL!');window.history.go(-1);</script>";
        }
        
?>