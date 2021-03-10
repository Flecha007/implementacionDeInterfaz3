<?php

include("conexion.php");

if (isset($_POST['ingresa'])) {
$usuario= $_POST['usuario'];
$password=$_POST['password'];
$consulta = "SELECT * FROM tusuarios WHERE nomusuario='$usuario' and `password` = '$password'";
$respuesta = mysqli_query($conex,$consulta);

$arr=mysqli_fetch_array($respuesta);
$filas=mysqli_num_rows($respuesta);
    if ($filas>0){
        if ($arr['nombre']=="administrador1"){
            header("location:inicioUs.php");
        }else{
            header("location:inicioUs1.php");   
        }
        
    }else{
        echo "<script>alert('¡USUARIO Y/O CONTRASEÑA INCORRECTOS!');window.location='/ApiResPhp'</script>";
    }
    mysqli_free_result($respuesta);
}

?>