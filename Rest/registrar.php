<?php

if (isset($_POST['registro'])) {
$nom= trim($_POST["nombre"]);
$ci= trim($_POST["cicli"]);
$idpaq= trim($_POST["idpaquete"]);
$cantdias= trim($_POST["dias"]);
$tot= trim($_POST["total"]);
$idusari= trim($_POST["idus"]);
$fech= trim($_POST["fech"]);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://localhost/API/post.php");

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "nomcliente=$nom&doccliente=$ci&idpaquete=$idpaq&cantidaddias=$cantdias&total=$tot&idusuario=$idusari&fecha=$fech");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$remote_server_output = curl_exec ($ch);

curl_close ($ch);
if (print_r($remote_server_output)){
    echo "<script>alert('REGISTRO CORRECTO!');window.location='/ApiResPhp/Rventas.php'</script>";
}
}

?>