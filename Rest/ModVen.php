<?php

include("conexion.php");
        $id = trim($_POST['id']);
        $nombc = trim($_POST['nomc']);
        $docc = trim($_POST['docc']);
        $idpa = trim($_POST['idpaq']);
        $dias = trim($_POST['dias']);
        $total = trim($_POST['total']);
        $consulta = "UPDATE tventas SET nomcliente = '$nombc', doccliente ='$docc', idpaquete = '$idpa', `cantidaddias` = '$dias' , `total` = '$total' WHERE idventa = '$id'";
        $respuesta = mysqli_query($conex,$consulta);
        if ($respuesta){
            echo "<script>alert('REGISTRO CORRECTO!');window.location='/ApiResPhp/Aventas.php'</script>";
        }else{
            echo "<script>alert('ALGO SALIO MAL!');window.history.go(-1);</script>";
        }
        
?>